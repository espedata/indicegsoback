<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity
 */
class Client
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_Client", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_client", type="string", length=45, nullable=true)
     */
    private $nomClient;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value_concat", type="integer", nullable=true)
     */
    private $valueConcat;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="FosUtilisateur", mappedBy="client")
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdClient(): ?int
    {
        return $this->idClient;
    }

    public function getNomClient(): ?string
    {
        return $this->nomClient;
    }

    public function setNomClient(?string $nomClient): self
    {
        $this->nomClient = $nomClient;

        return $this;
    }

    public function getValueConcat(): ?int
    {
        return $this->valueConcat;
    }

    public function setValueConcat(?int $valueConcat): self
    {
        $this->valueConcat = $valueConcat;

        return $this;
    }

    /**
     * @return Collection|FosUtilisateur[]
     */
    public function getUser(): Collection
    {
        return $this->user;
    }

    public function addUser(FosUtilisateur $user): self
    {
        if (!$this->user->contains($user)) {
            $this->user[] = $user;
            $user->addClient($this);
        }

        return $this;
    }

    public function removeUser(FosUtilisateur $user): self
    {
        if ($this->user->removeElement($user)) {
            $user->removeClient($this);
        }

        return $this;
    }

}
