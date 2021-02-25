<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table(name="contrat")
 * @ORM\Entity
 */
class Contrat
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Contrat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContrat;

    /**
     * @var int
     *
     * @ORM\Column(name="IdEntite_Gestion", type="integer", nullable=false)
     */
    private $identiteGestion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Code_Type_Contrat", type="integer", nullable=true)
     */
    private $codeTypeContrat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date_Debut_Contrat", type="datetime", nullable=true)
     */
    private $dateDebutContrat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date_Fin_Contrat", type="datetime", nullable=true)
     */
    private $dateFinContrat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Frequence_Releve_Contrat", type="string", length=50, nullable=true)
     */
    private $frequenceReleveContrat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Frequence_Paiement_Contrat", type="string", length=50, nullable=true)
     */
    private $frequencePaiementContrat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_signataires", type="string", length=100, nullable=true)
     */
    private $nomSignataires;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Commentaires", type="text", length=0, nullable=true)
     */
    private $commentaires;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_PJ", type="integer", nullable=true)
     */
    private $idPj;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Clauses_revision", type="text", length=0, nullable=true)
     */
    private $clausesRevision;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Objet_contrat", type="string", length=45, nullable=true)
     */
    private $objetContrat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_contrat", type="string", length=150, nullable=true)
     */
    private $nomContrat;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="mention_rapport_annuel", type="boolean", nullable=true)
     */
    private $mentionRapportAnnuel;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="EdmDocument", inversedBy="contrat")
     * @ORM\JoinTable(name="app_contrat_pieces_jointes",
     *   joinColumns={
     *     @ORM\JoinColumn(name="contrat_id", referencedColumnName="ID_Contrat")
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

    public function getIdContrat(): ?int
    {
        return $this->idContrat;
    }

    public function getIdentiteGestion(): ?int
    {
        return $this->identiteGestion;
    }

    public function setIdentiteGestion(int $identiteGestion): self
    {
        $this->identiteGestion = $identiteGestion;

        return $this;
    }

    public function getCodeTypeContrat(): ?int
    {
        return $this->codeTypeContrat;
    }

    public function setCodeTypeContrat(?int $codeTypeContrat): self
    {
        $this->codeTypeContrat = $codeTypeContrat;

        return $this;
    }

    public function getDateDebutContrat(): ?\DateTimeInterface
    {
        return $this->dateDebutContrat;
    }

    public function setDateDebutContrat(?\DateTimeInterface $dateDebutContrat): self
    {
        $this->dateDebutContrat = $dateDebutContrat;

        return $this;
    }

    public function getDateFinContrat(): ?\DateTimeInterface
    {
        return $this->dateFinContrat;
    }

    public function setDateFinContrat(?\DateTimeInterface $dateFinContrat): self
    {
        $this->dateFinContrat = $dateFinContrat;

        return $this;
    }

    public function getFrequenceReleveContrat(): ?string
    {
        return $this->frequenceReleveContrat;
    }

    public function setFrequenceReleveContrat(?string $frequenceReleveContrat): self
    {
        $this->frequenceReleveContrat = $frequenceReleveContrat;

        return $this;
    }

    public function getFrequencePaiementContrat(): ?string
    {
        return $this->frequencePaiementContrat;
    }

    public function setFrequencePaiementContrat(?string $frequencePaiementContrat): self
    {
        $this->frequencePaiementContrat = $frequencePaiementContrat;

        return $this;
    }

    public function getNomSignataires(): ?string
    {
        return $this->nomSignataires;
    }

    public function setNomSignataires(?string $nomSignataires): self
    {
        $this->nomSignataires = $nomSignataires;

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

    public function getIdPj(): ?int
    {
        return $this->idPj;
    }

    public function setIdPj(?int $idPj): self
    {
        $this->idPj = $idPj;

        return $this;
    }

    public function getClausesRevision(): ?string
    {
        return $this->clausesRevision;
    }

    public function setClausesRevision(?string $clausesRevision): self
    {
        $this->clausesRevision = $clausesRevision;

        return $this;
    }

    public function getObjetContrat(): ?string
    {
        return $this->objetContrat;
    }

    public function setObjetContrat(?string $objetContrat): self
    {
        $this->objetContrat = $objetContrat;

        return $this;
    }

    public function getNomContrat(): ?string
    {
        return $this->nomContrat;
    }

    public function setNomContrat(?string $nomContrat): self
    {
        $this->nomContrat = $nomContrat;

        return $this;
    }

    public function getMentionRapportAnnuel(): ?bool
    {
        return $this->mentionRapportAnnuel;
    }

    public function setMentionRapportAnnuel(?bool $mentionRapportAnnuel): self
    {
        $this->mentionRapportAnnuel = $mentionRapportAnnuel;

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
