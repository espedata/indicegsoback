<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * EntiteGestion
 *
 * @ORM\Table(name="entite_gestion", indexes={@ORM\Index(name="IDX_73BD6F64A9837E", columns={"CodeTypeModeGestion"}), @ORM\Index(name="IDX_73BD6F6B1F5E06D", columns={"ID_Collectivite"}), @ORM\Index(name="Code_Competence", columns={"Code_Competence"})})
 * @ORM\Entity
 */
class EntiteGestion
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdEntite_Gestion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identiteGestion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NomUniteGestion", type="string", length=255, nullable=true)
     */
    private $nomunitegestion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Residents_Permanents", type="integer", nullable=true)
     */
    private $residentsPermanents;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Residents_Temporaires", type="integer", nullable=true)
     */
    private $residentsTemporaires;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Invalide", type="boolean", nullable=true)
     */
    private $invalide;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_invalidite", type="datetime", nullable=true)
     */
    private $dateInvalidite;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="CalculAutoResPermanents", type="boolean", nullable=true, options={"default"="1"})
     */
    private $calculautorespermanents = true;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="CalculAutoResTemporaires", type="boolean", nullable=true, options={"default"="1"})
     */
    private $calculautorestemporaires = true;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NomFichierLogo", type="string", length=255, nullable=true)
     */
    private $nomfichierlogo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NomFichierImage", type="string", length=255, nullable=true)
     */
    private $nomfichierimage;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="AEP_Production", type="boolean", nullable=true)
     */
    private $aepProduction;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="AEP_Distribution", type="boolean", nullable=true)
     */
    private $aepDistribution;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="AEP_Protection", type="boolean", nullable=true)
     */
    private $aepProtection;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="AEP_Traitement", type="boolean", nullable=true)
     */
    private $aepTraitement;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="AEP_Transport", type="boolean", nullable=true)
     */
    private $aepTransport;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="AEP_Stockage", type="boolean", nullable=true)
     */
    private $aepStockage;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ASS_Collecte", type="boolean", nullable=true)
     */
    private $assCollecte;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ASS_Epuration", type="boolean", nullable=true)
     */
    private $assEpuration;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ASS_Transport", type="boolean", nullable=true)
     */
    private $assTransport;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ASS_TravauxConformite", type="boolean", nullable=true)
     */
    private $assTravauxconformite;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ASS_TravauxSuppression", type="boolean", nullable=true)
     */
    private $assTravauxsuppression;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ASS_Boues", type="boolean", nullable=true)
     */
    private $assBoues;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ANC_Entretien", type="boolean", nullable=true)
     */
    private $ancEntretien;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ANC_Realisation", type="boolean", nullable=true)
     */
    private $ancRealisation;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ANC_Rehabilitation", type="boolean", nullable=true)
     */
    private $ancRehabilitation;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ANC_Vidange", type="boolean", nullable=true)
     */
    private $ancVidange;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="bCalculAutoPopulationTotaleMajoree", type="boolean", nullable=true)
     */
    private $bcalculautopopulationtotalemajoree;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="bInclureDansRapportDepartemental", type="boolean", nullable=true, options={"default"="1"})
     */
    private $bincluredansrapportdepartemental = true;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bZonageRealise", type="integer", nullable=true)
     */
    private $bzonagerealise;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DateZonage", type="datetime", nullable=true)
     */
    private $datezonage;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="bServiceConcerneSISPEA", type="boolean", nullable=true, options={"default"="1"})
     */
    private $bserviceconcernesispea = true;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SeuilRendement", type="integer", nullable=true, options={"default"="65"})
     */
    private $seuilrendement = 65;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Commentaire_entite_gestion", type="text", length=0, nullable=true)
     */
    private $commentaireEntiteGestion;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ANC_ContrÃ´le", type="boolean", nullable=true)
     */
    private $ancContrã´le;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ASS_ContrÃ´le", type="boolean", nullable=true)
     */
    private $assContrã´le;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Code_Competence", type="integer", nullable=true)
     */
    private $codeCompetence;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IdSISPEA_Service", type="string", length=45, nullable=true)
     */
    private $idsispeaService;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pop_totale_retenue", type="integer", nullable=true)
     */
    private $popTotaleRetenue;

    /**
     * @var \Collectivite
     *
     * @ORM\ManyToOne(targetEntity="Collectivite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Collectivite", referencedColumnName="ID_Collectivite")
     * })
     */
    private $idCollectivite;

    /**
     * @var \AppTypeModeGestion
     *
     * @ORM\ManyToOne(targetEntity="AppTypeModeGestion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CodeTypeModeGestion", referencedColumnName="id")
     * })
     */
    private $codetypemodegestion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Mission", mappedBy="identiteGestion")
     */
    private $idmission;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idmission = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdentiteGestion(): ?int
    {
        return $this->identiteGestion;
    }

    public function getNomunitegestion(): ?string
    {
        return $this->nomunitegestion;
    }

    public function setNomunitegestion(?string $nomunitegestion): self
    {
        $this->nomunitegestion = $nomunitegestion;

        return $this;
    }

    public function getResidentsPermanents(): ?int
    {
        return $this->residentsPermanents;
    }

    public function setResidentsPermanents(?int $residentsPermanents): self
    {
        $this->residentsPermanents = $residentsPermanents;

        return $this;
    }

    public function getResidentsTemporaires(): ?int
    {
        return $this->residentsTemporaires;
    }

    public function setResidentsTemporaires(?int $residentsTemporaires): self
    {
        $this->residentsTemporaires = $residentsTemporaires;

        return $this;
    }

    public function getInvalide(): ?bool
    {
        return $this->invalide;
    }

    public function setInvalide(?bool $invalide): self
    {
        $this->invalide = $invalide;

        return $this;
    }

    public function getDateInvalidite(): ?\DateTimeInterface
    {
        return $this->dateInvalidite;
    }

    public function setDateInvalidite(?\DateTimeInterface $dateInvalidite): self
    {
        $this->dateInvalidite = $dateInvalidite;

        return $this;
    }

    public function getCalculautorespermanents(): ?bool
    {
        return $this->calculautorespermanents;
    }

    public function setCalculautorespermanents(?bool $calculautorespermanents): self
    {
        $this->calculautorespermanents = $calculautorespermanents;

        return $this;
    }

    public function getCalculautorestemporaires(): ?bool
    {
        return $this->calculautorestemporaires;
    }

    public function setCalculautorestemporaires(?bool $calculautorestemporaires): self
    {
        $this->calculautorestemporaires = $calculautorestemporaires;

        return $this;
    }

    public function getNomfichierlogo(): ?string
    {
        return $this->nomfichierlogo;
    }

    public function setNomfichierlogo(?string $nomfichierlogo): self
    {
        $this->nomfichierlogo = $nomfichierlogo;

        return $this;
    }

    public function getNomfichierimage(): ?string
    {
        return $this->nomfichierimage;
    }

    public function setNomfichierimage(?string $nomfichierimage): self
    {
        $this->nomfichierimage = $nomfichierimage;

        return $this;
    }

    public function getAepProduction(): ?bool
    {
        return $this->aepProduction;
    }

    public function setAepProduction(?bool $aepProduction): self
    {
        $this->aepProduction = $aepProduction;

        return $this;
    }

    public function getAepDistribution(): ?bool
    {
        return $this->aepDistribution;
    }

    public function setAepDistribution(?bool $aepDistribution): self
    {
        $this->aepDistribution = $aepDistribution;

        return $this;
    }

    public function getAepProtection(): ?bool
    {
        return $this->aepProtection;
    }

    public function setAepProtection(?bool $aepProtection): self
    {
        $this->aepProtection = $aepProtection;

        return $this;
    }

    public function getAepTraitement(): ?bool
    {
        return $this->aepTraitement;
    }

    public function setAepTraitement(?bool $aepTraitement): self
    {
        $this->aepTraitement = $aepTraitement;

        return $this;
    }

    public function getAepTransport(): ?bool
    {
        return $this->aepTransport;
    }

    public function setAepTransport(?bool $aepTransport): self
    {
        $this->aepTransport = $aepTransport;

        return $this;
    }

    public function getAepStockage(): ?bool
    {
        return $this->aepStockage;
    }

    public function setAepStockage(?bool $aepStockage): self
    {
        $this->aepStockage = $aepStockage;

        return $this;
    }

    public function getAssCollecte(): ?bool
    {
        return $this->assCollecte;
    }

    public function setAssCollecte(?bool $assCollecte): self
    {
        $this->assCollecte = $assCollecte;

        return $this;
    }

    public function getAssEpuration(): ?bool
    {
        return $this->assEpuration;
    }

    public function setAssEpuration(?bool $assEpuration): self
    {
        $this->assEpuration = $assEpuration;

        return $this;
    }

    public function getAssTransport(): ?bool
    {
        return $this->assTransport;
    }

    public function setAssTransport(?bool $assTransport): self
    {
        $this->assTransport = $assTransport;

        return $this;
    }

    public function getAssTravauxconformite(): ?bool
    {
        return $this->assTravauxconformite;
    }

    public function setAssTravauxconformite(?bool $assTravauxconformite): self
    {
        $this->assTravauxconformite = $assTravauxconformite;

        return $this;
    }

    public function getAssTravauxsuppression(): ?bool
    {
        return $this->assTravauxsuppression;
    }

    public function setAssTravauxsuppression(?bool $assTravauxsuppression): self
    {
        $this->assTravauxsuppression = $assTravauxsuppression;

        return $this;
    }

    public function getAssBoues(): ?bool
    {
        return $this->assBoues;
    }

    public function setAssBoues(?bool $assBoues): self
    {
        $this->assBoues = $assBoues;

        return $this;
    }

    public function getAncEntretien(): ?bool
    {
        return $this->ancEntretien;
    }

    public function setAncEntretien(?bool $ancEntretien): self
    {
        $this->ancEntretien = $ancEntretien;

        return $this;
    }

    public function getAncRealisation(): ?bool
    {
        return $this->ancRealisation;
    }

    public function setAncRealisation(?bool $ancRealisation): self
    {
        $this->ancRealisation = $ancRealisation;

        return $this;
    }

    public function getAncRehabilitation(): ?bool
    {
        return $this->ancRehabilitation;
    }

    public function setAncRehabilitation(?bool $ancRehabilitation): self
    {
        $this->ancRehabilitation = $ancRehabilitation;

        return $this;
    }

    public function getAncVidange(): ?bool
    {
        return $this->ancVidange;
    }

    public function setAncVidange(?bool $ancVidange): self
    {
        $this->ancVidange = $ancVidange;

        return $this;
    }

    public function getBcalculautopopulationtotalemajoree(): ?bool
    {
        return $this->bcalculautopopulationtotalemajoree;
    }

    public function setBcalculautopopulationtotalemajoree(?bool $bcalculautopopulationtotalemajoree): self
    {
        $this->bcalculautopopulationtotalemajoree = $bcalculautopopulationtotalemajoree;

        return $this;
    }

    public function getBincluredansrapportdepartemental(): ?bool
    {
        return $this->bincluredansrapportdepartemental;
    }

    public function setBincluredansrapportdepartemental(?bool $bincluredansrapportdepartemental): self
    {
        $this->bincluredansrapportdepartemental = $bincluredansrapportdepartemental;

        return $this;
    }

    public function getBzonagerealise(): ?int
    {
        return $this->bzonagerealise;
    }

    public function setBzonagerealise(?int $bzonagerealise): self
    {
        $this->bzonagerealise = $bzonagerealise;

        return $this;
    }

    public function getDatezonage(): ?\DateTimeInterface
    {
        return $this->datezonage;
    }

    public function setDatezonage(?\DateTimeInterface $datezonage): self
    {
        $this->datezonage = $datezonage;

        return $this;
    }

    public function getBserviceconcernesispea(): ?bool
    {
        return $this->bserviceconcernesispea;
    }

    public function setBserviceconcernesispea(?bool $bserviceconcernesispea): self
    {
        $this->bserviceconcernesispea = $bserviceconcernesispea;

        return $this;
    }

    public function getSeuilrendement(): ?int
    {
        return $this->seuilrendement;
    }

    public function setSeuilrendement(?int $seuilrendement): self
    {
        $this->seuilrendement = $seuilrendement;

        return $this;
    }

    public function getCommentaireEntiteGestion(): ?string
    {
        return $this->commentaireEntiteGestion;
    }

    public function setCommentaireEntiteGestion(?string $commentaireEntiteGestion): self
    {
        $this->commentaireEntiteGestion = $commentaireEntiteGestion;

        return $this;
    }

    public function getAncContrã´le(): ?bool
    {
        return $this->ancContrã´le;
    }

    public function setAncContrã´le(?bool $ancContrã´le): self
    {
        $this->ancContrã´le = $ancContrã´le;

        return $this;
    }

    public function getAssContrã´le(): ?bool
    {
        return $this->assContrã´le;
    }

    public function setAssContrã´le(?bool $assContrã´le): self
    {
        $this->assContrã´le = $assContrã´le;

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

    public function getIdsispeaService(): ?string
    {
        return $this->idsispeaService;
    }

    public function setIdsispeaService(?string $idsispeaService): self
    {
        $this->idsispeaService = $idsispeaService;

        return $this;
    }

    public function getPopTotaleRetenue(): ?int
    {
        return $this->popTotaleRetenue;
    }

    public function setPopTotaleRetenue(?int $popTotaleRetenue): self
    {
        $this->popTotaleRetenue = $popTotaleRetenue;

        return $this;
    }

    public function getIdCollectivite(): ?Collectivite
    {
        return $this->idCollectivite;
    }

    public function setIdCollectivite(?Collectivite $idCollectivite): self
    {
        $this->idCollectivite = $idCollectivite;

        return $this;
    }

    public function getCodetypemodegestion(): ?AppTypeModeGestion
    {
        return $this->codetypemodegestion;
    }

    public function setCodetypemodegestion(?AppTypeModeGestion $codetypemodegestion): self
    {
        $this->codetypemodegestion = $codetypemodegestion;

        return $this;
    }

    /**
     * @return Collection|Mission[]
     */
    public function getIdmission(): Collection
    {
        return $this->idmission;
    }

    public function addIdmission(Mission $idmission): self
    {
        if (!$this->idmission->contains($idmission)) {
            $this->idmission[] = $idmission;
            $idmission->addIdentiteGestion($this);
        }

        return $this;
    }

    public function removeIdmission(Mission $idmission): self
    {
        if ($this->idmission->removeElement($idmission)) {
            $idmission->removeIdentiteGestion($this);
        }

        return $this;
    }

}
