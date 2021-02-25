<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Mission
 *
 * @ORM\Table(name="mission")
 * @ORM\Entity
 */
class Mission
{
    /**
     * @var int
     *
     * @ORM\Column(name="idmission", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmission;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=100, nullable=true)
     */
    private $libelle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="code_competence", type="integer", nullable=true)
     */
    private $codeCompetence;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="EntiteGestion", inversedBy="idmission")
     * @ORM\JoinTable(name="mission_entite_gestion",
     *   joinColumns={
     *     @ORM\JoinColumn(name="IdMission", referencedColumnName="idmission")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="IdEntite_Gestion", referencedColumnName="IdEntite_Gestion")
     *   }
     * )
     */
    private $identiteGestion;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->identiteGestion = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdmission(): ?int
    {
        return $this->idmission;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getCodeCompetence(): ?int
    {
        return $this->codeCompetence;
    }

    public function setCodeCompetence(?int $codeCompetence): self
    {
        $this->codeCompetence = $codeCompetence;

        return $this;
    }

    /**
     * @return Collection|EntiteGestion[]
     */
    public function getIdentiteGestion(): Collection
    {
        return $this->identiteGestion;
    }

    public function addIdentiteGestion(EntiteGestion $identiteGestion): self
    {
        if (!$this->identiteGestion->contains($identiteGestion)) {
            $this->identiteGestion[] = $identiteGestion;
        }

        return $this;
    }

    public function removeIdentiteGestion(EntiteGestion $identiteGestion): self
    {
        $this->identiteGestion->removeElement($identiteGestion);

        return $this;
    }

}
