<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * ImportExport
 *
 * @ORM\Table(name="import_export", indexes={@ORM\Index(name="id_EntiteGestion_idx", columns={"id_EntiteGestion"}), @ORM\Index(name="fk_import_export_entite_gestion1_idx", columns={"identite_gestion_selectionnee"}), @ORM\Index(name="fk_import_export_contrat1_idx", columns={"id_Contrat"})})
 * @ORM\Entity
 */
class ImportExport
{
    /**
     * @var int
     *
     * @ORM\Column(name="idimport_export", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idimportExport;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_EntiteGestion", type="integer", nullable=true)
     */
    private $idEntitegestion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nature_import_export", type="string", length=45, nullable=true)
     */
    private $natureImportExport;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_autre_collectivite", type="string", length=100, nullable=true)
     */
    private $nomAutreCollectivite;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date_debut", type="datetime", nullable=true)
     */
    private $dateDebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date_fin", type="datetime", nullable=true)
     */
    private $dateFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Commentaire", type="text", length=0, nullable=true)
     */
    private $commentaire;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_collectivite_selectionnee", type="integer", nullable=true)
     */
    private $idCollectiviteSelectionnee;

    /**
     * @var int|null
     *
     * @ORM\Column(name="identite_gestion_selectionnee", type="integer", nullable=true)
     */
    private $identiteGestionSelectionnee;

    /**
     * @var \Contrat
     *
     * @ORM\ManyToOne(targetEntity="Contrat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Contrat", referencedColumnName="ID_Contrat")
     * })
     */
    private $idContrat;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="EdmDocument", inversedBy="importExport")
     * @ORM\JoinTable(name="app_import_export_pieces_jointes",
     *   joinColumns={
     *     @ORM\JoinColumn(name="import_export_id", referencedColumnName="idimport_export")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="document_id", referencedColumnName="id")
     *   }
     * )
     */
    private $document;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->document = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdimportExport(): ?int
    {
        return $this->idimportExport;
    }

    public function getIdEntitegestion(): ?int
    {
        return $this->idEntitegestion;
    }

    public function setIdEntitegestion(?int $idEntitegestion): self
    {
        $this->idEntitegestion = $idEntitegestion;

        return $this;
    }

    public function getNatureImportExport(): ?string
    {
        return $this->natureImportExport;
    }

    public function setNatureImportExport(?string $natureImportExport): self
    {
        $this->natureImportExport = $natureImportExport;

        return $this;
    }

    public function getNomAutreCollectivite(): ?string
    {
        return $this->nomAutreCollectivite;
    }

    public function setNomAutreCollectivite(?string $nomAutreCollectivite): self
    {
        $this->nomAutreCollectivite = $nomAutreCollectivite;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

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

    public function getIdCollectiviteSelectionnee(): ?int
    {
        return $this->idCollectiviteSelectionnee;
    }

    public function setIdCollectiviteSelectionnee(?int $idCollectiviteSelectionnee): self
    {
        $this->idCollectiviteSelectionnee = $idCollectiviteSelectionnee;

        return $this;
    }

    public function getIdentiteGestionSelectionnee(): ?int
    {
        return $this->identiteGestionSelectionnee;
    }

    public function setIdentiteGestionSelectionnee(?int $identiteGestionSelectionnee): self
    {
        $this->identiteGestionSelectionnee = $identiteGestionSelectionnee;

        return $this;
    }

    public function getIdContrat(): ?Contrat
    {
        return $this->idContrat;
    }

    public function setIdContrat(?Contrat $idContrat): self
    {
        $this->idContrat = $idContrat;

        return $this;
    }

    /**
     * @return Collection|EdmDocument[]
     */
    public function getDocument(): Collection
    {
        return $this->document;
    }

    public function addDocument(EdmDocument $document): self
    {
        if (!$this->document->contains($document)) {
            $this->document[] = $document;
        }

        return $this;
    }

    public function removeDocument(EdmDocument $document): self
    {
        $this->document->removeElement($document);

        return $this;
    }

}
