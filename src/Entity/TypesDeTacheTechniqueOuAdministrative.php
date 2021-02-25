<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypesDeTacheTechniqueOuAdministrative
 *
 * @ORM\Table(name="types_de_tache_technique_ou_administrative", indexes={@ORM\Index(name="IDX_B1C6DDBFBEFE4F05", columns={"Code_Prestation"})})
 * @ORM\Entity
 */
class TypesDeTacheTechniqueOuAdministrative
{
    /**
     * @var int
     *
     * @ORM\Column(name="Code_Tache", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeTache;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Libelle_Tache", type="string", length=60, nullable=true)
     */
    private $libelleTache;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="AEP", type="boolean", nullable=true)
     */
    private $aep;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ASS", type="boolean", nullable=true)
     */
    private $ass;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ASSNC", type="boolean", nullable=true)
     */
    private $assnc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ordre", type="integer", nullable=true, options={"default"="100"})
     */
    private $ordre = 100;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Protege", type="boolean", nullable=true)
     */
    private $protege;

    /**
     * @var \TypesDePrestations
     *
     * @ORM\ManyToOne(targetEntity="TypesDePrestations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Prestation", referencedColumnName="Code_Prestation")
     * })
     */
    private $codePrestation;

    public function getCodeTache(): ?int
    {
        return $this->codeTache;
    }

    public function getLibelleTache(): ?string
    {
        return $this->libelleTache;
    }

    public function setLibelleTache(?string $libelleTache): self
    {
        $this->libelleTache = $libelleTache;

        return $this;
    }

    public function getAep(): ?bool
    {
        return $this->aep;
    }

    public function setAep(?bool $aep): self
    {
        $this->aep = $aep;

        return $this;
    }

    public function getAss(): ?bool
    {
        return $this->ass;
    }

    public function setAss(?bool $ass): self
    {
        $this->ass = $ass;

        return $this;
    }

    public function getAssnc(): ?bool
    {
        return $this->assnc;
    }

    public function setAssnc(?bool $assnc): self
    {
        $this->assnc = $assnc;

        return $this;
    }

    public function getOrdre(): ?int
    {
        return $this->ordre;
    }

    public function setOrdre(?int $ordre): self
    {
        $this->ordre = $ordre;

        return $this;
    }

    public function getProtege(): ?bool
    {
        return $this->protege;
    }

    public function setProtege(?bool $protege): self
    {
        $this->protege = $protege;

        return $this;
    }

    public function getCodePrestation(): ?TypesDePrestations
    {
        return $this->codePrestation;
    }

    public function setCodePrestation(?TypesDePrestations $codePrestation): self
    {
        $this->codePrestation = $codePrestation;

        return $this;
    }


}
