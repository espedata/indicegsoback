<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DonneesTechniquesAnc
 *
 * @ORM\Table(name="donnees_techniques_anc", indexes={@ORM\Index(name="fk_donnees_techniques_anc_entite_gestion1", columns={"IdEntite_Gestion"})})
 * @ORM\Entity
 */
class DonneesTechniquesAnc
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdDonneeTechniqueANC", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddonneetechniqueanc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Annee_De_Reference", type="integer", nullable=true)
     */
    private $anneeDeReference;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbInstallation", type="integer", nullable=true)
     */
    private $nbinstallation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PopulationDesservie", type="integer", nullable=true)
     */
    private $populationdesservie;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbControleConceptionInstallationNlle", type="integer", nullable=true)
     */
    private $nbcontroleconceptioninstallationnlle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbControleExecutionInstallationNlle", type="integer", nullable=true)
     */
    private $nbcontroleexecutioninstallationnlle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbDiagnosticFonctionnementEntretien", type="integer", nullable=true)
     */
    private $nbdiagnosticfonctionnemententretien;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbOperationEntretien", type="integer", nullable=true)
     */
    private $nboperationentretien;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbOperationVidange", type="integer", nullable=true)
     */
    private $nboperationvidange;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbRehabilitation", type="integer", nullable=true)
     */
    private $nbrehabilitation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbTraitementMatieresVidange", type="integer", nullable=true)
     */
    private $nbtraitementmatieresvidange;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NbRealisationInstallation", type="integer", nullable=true)
     */
    private $nbrealisationinstallation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Commentaires", type="text", length=0, nullable=true)
     */
    private $commentaires;

    /**
     * @var \EntiteGestion
     *
     * @ORM\ManyToOne(targetEntity="EntiteGestion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdEntite_Gestion", referencedColumnName="IdEntite_Gestion")
     * })
     */
    private $identiteGestion;

    public function getIddonneetechniqueanc(): ?int
    {
        return $this->iddonneetechniqueanc;
    }

    public function getAnneeDeReference(): ?int
    {
        return $this->anneeDeReference;
    }

    public function setAnneeDeReference(?int $anneeDeReference): self
    {
        $this->anneeDeReference = $anneeDeReference;

        return $this;
    }

    public function getNbinstallation(): ?int
    {
        return $this->nbinstallation;
    }

    public function setNbinstallation(?int $nbinstallation): self
    {
        $this->nbinstallation = $nbinstallation;

        return $this;
    }

    public function getPopulationdesservie(): ?int
    {
        return $this->populationdesservie;
    }

    public function setPopulationdesservie(?int $populationdesservie): self
    {
        $this->populationdesservie = $populationdesservie;

        return $this;
    }

    public function getNbcontroleconceptioninstallationnlle(): ?int
    {
        return $this->nbcontroleconceptioninstallationnlle;
    }

    public function setNbcontroleconceptioninstallationnlle(?int $nbcontroleconceptioninstallationnlle): self
    {
        $this->nbcontroleconceptioninstallationnlle = $nbcontroleconceptioninstallationnlle;

        return $this;
    }

    public function getNbcontroleexecutioninstallationnlle(): ?int
    {
        return $this->nbcontroleexecutioninstallationnlle;
    }

    public function setNbcontroleexecutioninstallationnlle(?int $nbcontroleexecutioninstallationnlle): self
    {
        $this->nbcontroleexecutioninstallationnlle = $nbcontroleexecutioninstallationnlle;

        return $this;
    }

    public function getNbdiagnosticfonctionnemententretien(): ?int
    {
        return $this->nbdiagnosticfonctionnemententretien;
    }

    public function setNbdiagnosticfonctionnemententretien(?int $nbdiagnosticfonctionnemententretien): self
    {
        $this->nbdiagnosticfonctionnemententretien = $nbdiagnosticfonctionnemententretien;

        return $this;
    }

    public function getNboperationentretien(): ?int
    {
        return $this->nboperationentretien;
    }

    public function setNboperationentretien(?int $nboperationentretien): self
    {
        $this->nboperationentretien = $nboperationentretien;

        return $this;
    }

    public function getNboperationvidange(): ?int
    {
        return $this->nboperationvidange;
    }

    public function setNboperationvidange(?int $nboperationvidange): self
    {
        $this->nboperationvidange = $nboperationvidange;

        return $this;
    }

    public function getNbrehabilitation(): ?int
    {
        return $this->nbrehabilitation;
    }

    public function setNbrehabilitation(?int $nbrehabilitation): self
    {
        $this->nbrehabilitation = $nbrehabilitation;

        return $this;
    }

    public function getNbtraitementmatieresvidange(): ?int
    {
        return $this->nbtraitementmatieresvidange;
    }

    public function setNbtraitementmatieresvidange(?int $nbtraitementmatieresvidange): self
    {
        $this->nbtraitementmatieresvidange = $nbtraitementmatieresvidange;

        return $this;
    }

    public function getNbrealisationinstallation(): ?int
    {
        return $this->nbrealisationinstallation;
    }

    public function setNbrealisationinstallation(?int $nbrealisationinstallation): self
    {
        $this->nbrealisationinstallation = $nbrealisationinstallation;

        return $this;
    }

    public function getCommentaires(): ?string
    {
        return $this->commentaires;
    }

    public function setCommentaires(?string $commentaires): self
    {
        $this->commentaires = $commentaires;

        return $this;
    }

    public function getIdentiteGestion(): ?EntiteGestion
    {
        return $this->identiteGestion;
    }

    public function setIdentiteGestion(?EntiteGestion $identiteGestion): self
    {
        $this->identiteGestion = $identiteGestion;

        return $this;
    }


}
