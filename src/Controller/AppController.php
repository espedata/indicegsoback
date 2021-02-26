<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppController extends AbstractController
{
    /**
     * @Route("/send_email", name="send_email", methods={"POST", "GET"})
     */
    public function sendEmailForReplacePassword(Request $request, \Swift_Mailer $mailer, TokenGeneratorInterface $tokenGenerator):JsonResponse
    {

        $id = $request->request->get('id');
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($id);
        $email = $user->getEmail();

        if($user === null){
            return new JsonResponse(["data" => "Cette adresse email n'existe pas."]); 
        }

        $token = $tokenGenerator->generateToken();

        try {
            $user->setResetToken($token);
            $entityManager->flush();
        } catch (\Exception $e) {
            return new JsonResponse(["data" => "Token non stocké en bdd."]); 
        }

        $url = $this->generateUrl('replace_password', array('token' => $token), UrlGeneratorInterface::ABSOLUTE_URL);

        $message = (new \Swift_Message('Réinitialisation de votre mot de passe'))
                    ->setFrom('espedata.espelia@gmail.com')
                    ->setTo($email)
                    ->setBody(
                        $this->renderView(
                            'email/validate_account.html.twig', ["url" => $url]
                        ), 'text/html'
                    );


        $mailer->send($message);

        if($mailer->send($message)){
            return new JsonResponse(["data" => "message envoyé"]);
        } else {
            return new JsonResponse(["data" => "message pas envoyé"]);
        }
    }

    /**
     * @Route("/replace_password/{token}", name="replace_password")
     * 
     */
    public function replacePassword(Request $request, string $token, UserPasswordEncoderInterface $passwordEncoder)
    {
        if($request->isMethod('POST')){
            $entityManager = $this->getDoctrine()->getManager();
            $user = $entityManager->getRepository(User::class)->findOneByResetToken($token);

            if($user === null){
                $this->addFlash('danger', 'Token inconnu');
                return new JsonResponse(['data' => 'Token inconnu']);
            }

            $user->setResetToken(null);
            $user->setPassword($passwordEncoder->encodePassword($user, $request->request->get('password')));
            $entityManager->flush();

            $this->addFlash('notice', 'Mot de passe mis à jour');

           return $this->redirect('http://gso-indices.espedata.fr/#/connexion');
        } else { 
            return $this->render('email/replace_password.html.twig', ['token' => $token]);
        }
    }

}