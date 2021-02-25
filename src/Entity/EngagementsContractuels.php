<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * EngagementsContractuels
 *
 * @ORM\Table(name="engagements_contractuels", indexes={@ORM\Index(name="idcontrat2", columns={"idcontrat"})})
 * @ORM\Entity
 */
class EngagementsContractuels
{
    /**
     * @var int
     *
     * @ORM\Column(name="idengagements", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idengagements;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="type_engagement", type="boolean", nullable=true)
     */
    private $typeEngagement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_engagement", type="string", length=400, nullable=true)
     */
    private $nomEngagement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="objectifs_engagement", type="text", length=65535, nullable=true)
     */
    private $objectifsEngagement;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_engagement", type="date", nullable=true)
     */
    private $dateEngagement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="penalite_engagement", type="text", length=0, nullable=true)
     */
    private $penaliteEngagement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reference_engagement", type="text", length=65535, nullable=true)
     */
    private $referenceEngagement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type_periodicite", type="integer", nullable=true)
     */
    private $typePeriodicite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="frequence_periodicite", type="integer", nullable=true)
     */
    private $frequencePeriodicite;

    /**
     * @var \Contrat
     *
     * @ORM\ManyToOne(targetEntity="Contrat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcontrat", referencedColumnName="ID_Contrat")
     * })
     */
    private $idcontrat;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="EdmDocument", inversedBy="engagement")
     * @ORM\JoinTable(name="app_engagement_pieces_jointes",
     *   joinColumns={
     *     @ORM\JoinColumn(name="engagement_id", referencedColumnName="idengagements")
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

    public function getIdengagements(): ?int
    {
        return $this->idengagements;
    }

    public function getTypeEngagement(): ?bool
    {
        return $this->typeEngagement;
    }

    public function setTypeEngagement(?bool $typeEngagement): self
    {
        $this->typeEngagement = $typeEngagement;

        return $this;
    }

    public function getNomEngagement(): ?string
    {
        return $this->nomEngagement;
    }

    public function setNomEngagement(?string $nomEngagement): self
    {
        $this->nomEngagement = $nomEngagement;

        return $this;
    }

    public function getObjectifsEngagement(): ?string
    {
        return $this->objectifsEngagement;
    }

    public function setObjectifsEngagement(?string $objectifsEngagement): self
    {
        $this->objectifsEngagement = $objectifsEngagement;

        return $this;
    }

    public function getDateEngagement(): ?\DateTimeInterface
    {
        return $this->dateEngagement;
    }

    public function setDateEngagement(?\DateTimeInterface $dateEngagement): self
    {
        $this->dateEngagement = $dateEngagement;

        return $this;
    }

    public function getPenaliteEngagement(): ?string
    {
        return $this->penaliteEngagement;
    }

    public function setPenaliteEngagement(?string $penaliteEngagement): self
    {
        $this->penaliteEngagement = $penaliteEngagement;

        return $this;
    }

    public function getReferenceEngagement(): ?string
    {
        return $this->referenceEngagement;
    }

    public function setReferenceEngagement(?string $referenceEngagement): self
    {
        $this->referenceEngagement = $referenceEngagement;

        return $this;
    }

    public function getTypePeriodicite(): ?int
    {
        return $this->typePeriodicite;
    }

    public function setTypePeriodicite(?int $typePeriodicite): self
    {
        $this->typePeriodicite = $typePeriodicite;

        return $this;
    }

    public function getFrequencePeriodicite(): ?int
    {
        return $this->frequencePeriodicite;
    }

    public function setFrequencePeriodicite(?int $frequencePeriodicite): self
    {
        $this->frequencePeriodicite = $frequencePeriodicite;

        return $this;
    }

    public function getIdcontrat(): ?Contrat
    {
        return $this->idcontrat;
    }

    public function setIdcontrat(?Contrat $idcontrat): self
    {
        $this->idcontrat = $idcontrat;

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
