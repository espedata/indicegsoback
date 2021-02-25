<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * EdmDocument
 *
 * @ORM\Table(name="edm_document")
 * @ORM\Entity
 */
class EdmDocument
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=true)
     */
    private $parentId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extension", type="string", length=16, nullable=true)
     */
    private $extension;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mime_type", type="string", length=255, nullable=true)
     */
    private $mimeType;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="number_downloads", type="integer", nullable=false)
     */
    private $numberDownloads = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="size", type="integer", nullable=false)
     */
    private $size = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="integer", nullable=false, options={"default"="117"})
     */
    private $type = 117;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Contrat", mappedBy="document")
     */
    private $contrat;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="EngagementsContractuels", mappedBy="document")
     */
    private $engagement;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ImportExport", mappedBy="document")
     */
    private $importExport;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SousContrat", mappedBy="document")
     */
    private $sousContrat;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Taches", mappedBy="document")
     */
    private $tache;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->contrat = new \Doctrine\Common\Collections\ArrayCollection();
        $this->engagement = new \Doctrine\Common\Collections\ArrayCollection();
        $this->importExport = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sousContrat = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tache = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getParentId(): ?int
    {
        return $this->parentId;
    }

    public function setParentId(?int $parentId): self
    {
        $this->parentId = $parentId;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getExtension(): ?string
    {
        return $this->extension;
    }

    public function setExtension(?string $extension): self
    {
        $this->extension = $extension;

        return $this;
    }

    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    public function setMimeType(?string $mimeType): self
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNumberDownloads(): ?int
    {
        return $this->numberDownloads;
    }

    public function setNumberDownloads(int $numberDownloads): self
    {
        $this->numberDownloads = $numberDownloads;

        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return Collection|Contrat[]
     */
    public function getContrat(): Collection
    {
        return $this->contrat;
    }

    public function addContrat(Contrat $contrat): self
    {
        if (!$this->contrat->contains($contrat)) {
            $this->contrat[] = $contrat;
            $contrat->addDocument($this);
        }

        return $this;
    }

    public function removeContrat(Contrat $contrat): self
    {
        if ($this->contrat->removeElement($contrat)) {
            $contrat->removeDocument($this);
        }

        return $this;
    }

    /**
     * @return Collection|EngagementsContractuels[]
     */
    public function getEngagement(): Collection
    {
        return $this->engagement;
    }

    public function addEngagement(EngagementsContractuels $engagement): self
    {
        if (!$this->engagement->contains($engagement)) {
            $this->engagement[] = $engagement;
            $engagement->addDocument($this);
        }

        return $this;
    }

    public function removeEngagement(EngagementsContractuels $engagement): self
    {
        if ($this->engagement->removeElement($engagement)) {
            $engagement->removeDocument($this);
        }

        return $this;
    }

    /**
     * @return Collection|ImportExport[]
     */
    public function getImportExport(): Collection
    {
        return $this->importExport;
    }

    public function addImportExport(ImportExport $importExport): self
    {
        if (!$this->importExport->contains($importExport)) {
            $this->importExport[] = $importExport;
            $importExport->addDocument($this);
        }

        return $this;
    }

    public function removeImportExport(ImportExport $importExport): self
    {
        if ($this->importExport->removeElement($importExport)) {
            $importExport->removeDocument($this);
        }

        return $this;
    }

    /**
     * @return Collection|SousContrat[]
     */
    public function getSousContrat(): Collection
    {
        return $this->sousContrat;
    }

    public function addSousContrat(SousContrat $sousContrat): self
    {
        if (!$this->sousContrat->contains($sousContrat)) {
            $this->sousContrat[] = $sousContrat;
            $sousContrat->addDocument($this);
        }

        return $this;
    }

    public function removeSousContrat(SousContrat $sousContrat): self
    {
        if ($this->sousContrat->removeElement($sousContrat)) {
            $sousContrat->removeDocument($this);
        }

        return $this;
    }

    /**
     * @return Collection|Taches[]
     */
    public function getTache(): Collection
    {
        return $this->tache;
    }

    public function addTache(Taches $tache): self
    {
        if (!$this->tache->contains($tache)) {
            $this->tache[] = $tache;
            $tache->addDocument($this);
        }

        return $this;
    }

    public function removeTache(Taches $tache): self
    {
        if ($this->tache->removeElement($tache)) {
            $tache->removeDocument($this);
        }

        return $this;
    }

}
