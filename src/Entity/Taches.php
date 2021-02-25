<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Taches
 *
 * @ORM\Table(name="taches", indexes={@ORM\Index(name="FK_3BF2CD987FD23939", columns={"code_tache"}), @ORM\Index(name="id_contrat_idx", columns={"idcontrat"})})
 * @ORM\Entity
 */
class Taches
{
    /**
     * @var int
     *
     * @ORM\Column(name="idtaches", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtaches;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entite_tache", type="string", length=45, nullable=true)
     */
    private $entiteTache;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaires_tache", type="text", length=0, nullable=true)
     */
    private $commentairesTache;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_pj", type="integer", nullable=true)
     */
    private $idPj;

    /**
     * @var \TypesDeTacheTechniqueOuAdministrative
     *
     * @ORM\ManyToOne(targetEntity="TypesDeTacheTechniqueOuAdministrative")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="code_tache", referencedColumnName="Code_Tache")
     * })
     */
    private $codeTache;

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
     * @ORM\ManyToMany(targetEntity="EdmDocument", inversedBy="tache")
     * @ORM\JoinTable(name="app_tache_pieces_jointes",
     *   joinColumns={
     *     @ORM\JoinColumn(name="tache_id", referencedColumnName="idtaches")
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

    public function getIdtaches(): ?int
    {
        return $this->idtaches;
    }

    public function getEntiteTache(): ?string
    {
        return $this->entiteTache;
    }

    public function setEntiteTache(?string $entiteTache): self
    {
        $this->entiteTache = $entiteTache;

        return $this;
    }

    public function getCommentairesTache(): ?string
    {
        return $this->commentairesTache;
    }

    public function setCommentairesTache(?string $commentairesTache): self
    {
        $this->commentairesTache = $commentairesTache;

        return $this;
    }

    public function getIdPj(): ?int
    {
        return $this->idPj;
    }

    public function setIdPj(?int $idPj): self
    {
        $this->idPj = $idPj;

        return $this;
    }

    public function getCodeTache(): ?TypesDeTacheTechniqueOuAdministrative
    {
        return $this->codeTache;
    }

    public function setCodeTache(?TypesDeTacheTechniqueOuAdministrative $codeTache): self
    {
        $this->codeTache = $codeTache;

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
