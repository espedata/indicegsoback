<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormuleIndexation
 *
 * @ORM\Table(name="formule_indexation", indexes={@ORM\Index(name="fk_formule_indexation_contrat1", columns={"id_Contrat"}), @ORM\Index(name="fk_formule_indexation_client1", columns={"id_Client"})})
 * @ORM\Entity
 */
class FormuleIndexation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idformule_indexation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idformuleIndexation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_Client", type="integer", nullable=true)
     */
    private $idClient;

    /**
     * @var int
     *
     * @ORM\Column(name="id_Contrat", type="integer", nullable=false)
     */
    private $idContrat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_formule_indexation", type="string", length=45, nullable=true)
     */
    private $nomFormuleIndexation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_de_base", type="date", nullable=true)
     */
    private $dateDeBase;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="connu_reel_formule_indexation", type="boolean", nullable=true)
     */
    private $connuReelFormuleIndexation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbdecimales_indexation", type="integer", nullable=true)
     */
    private $nbdecimalesIndexation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="formule", type="string", length=1000, nullable=true)
     */
    private $formule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire", type="text", length=65535, nullable=true)
     */
    private $commentaire;

    public function getIdformuleIndexation(): ?int
    {
        return $this->idformuleIndexation;
    }

    public function getIdClient(): ?int
    {
        return $this->idClient;
    }

    public function setIdClient(?int $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }

    public function getIdContrat(): ?int
    {
        return $this->idContrat;
    }

    public function setIdContrat(int $idContrat): self
    {
        $this->idContrat = $idContrat;

        return $this;
    }

    public function getNomFormuleIndexation(): ?string
    {
        return $this->nomFormuleIndexation;
    }

    public function setNomFormuleIndexation(?string $nomFormuleIndexation): self
    {
        $this->nomFormuleIndexation = $nomFormuleIndexation;

        return $this;
    }

    public function getDateDeBase(): ?\DateTimeInterface
    {
        return $this->dateDeBase;
    }

    public function setDateDeBase(?\DateTimeInterface $dateDeBase): self
    {
        $this->dateDeBase = $dateDeBase;

        return $this;
    }

    public function getConnuReelFormuleIndexation(): ?bool
    {
        return $this->connuReelFormuleIndexation;
    }

    public function setConnuReelFormuleIndexation(?bool $connuReelFormuleIndexation): self
    {
        $this->connuReelFormuleIndexation = $connuReelFormuleIndexation;

        return $this;
    }

    public function getNbdecimalesIndexation(): ?int
    {
        return $this->nbdecimalesIndexation;
    }

    public function setNbdecimalesIndexation(?int $nbdecimalesIndexation): self
    {
        $this->nbdecimalesIndexation = $nbdecimalesIndexation;

        return $this;
    }

    public function getFormule(): ?string
    {
        return $this->formule;
    }

    public function setFormule(?string $formule): self
    {
        $this->formule = $formule;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }


}
