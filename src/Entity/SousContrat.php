<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * SousContrat
 *
 * @ORM\Table(name="sous_contrat", indexes={@ORM\Index(name="Contrat", columns={"ID_Contrat"})})
 * @ORM\Entity
 */
class SousContrat
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_sous_Contrat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSousContrat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_souscontrat", type="string", length=45, nullable=true)
     */
    private $nomSouscontrat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Type_souscontrat", type="string", length=45, nullable=true)
     */
    private $typeSouscontrat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Objet_Avenant", type="text", length=0, nullable=true)
     */
    private $objetAvenant;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date_Debut_Avenant", type="datetime", nullable=true)
     */
    private $dateDebutAvenant;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date_Fin_Avenant", type="datetime", nullable=true)
     */
    private $dateFinAvenant;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_PJ", type="integer", nullable=true)
     */
    private $idPj;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Commentaires", type="text", length=0, nullable=true)
     */
    private $commentaires;

    /**
     * @var \Contrat
     *
     * @ORM\ManyToOne(targetEntity="Contrat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Contrat", referencedColumnName="ID_Contrat")
     * })
     */
    private $idContrat;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="EdmDocument", inversedBy="sousContrat")
     * @ORM\JoinTable(name="app_sous_contrat_pieces_jointes",
     *   joinColumns={
     *     @ORM\JoinColumn(name="sous_contrat_id", referencedColumnName="ID_sous_Contrat")
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

    public function getIdSousContrat(): ?int
    {
        return $this->idSousContrat;
    }

    public function getNomSouscontrat(): ?string
    {
        return $this->nomSouscontrat;
    }

    public function setNomSouscontrat(?string $nomSouscontrat): self
    {
        $this->nomSouscontrat = $nomSouscontrat;

        return $this;
    }

    public function getTypeSouscontrat(): ?string
    {
        return $this->typeSouscontrat;
    }

    public function setTypeSouscontrat(?string $typeSouscontrat): self
    {
        $this->typeSouscontrat = $typeSouscontrat;

        return $this;
    }

    public function getObjetAvenant(): ?string
    {
        return $this->objetAvenant;
    }

    public function setObjetAvenant(?string $objetAvenant): self
    {
        $this->objetAvenant = $objetAvenant;

        return $this;
    }

    public function getDateDebutAvenant(): ?\DateTimeInterface
    {
        return $this->dateDebutAvenant;
    }

    public function setDateDebutAvenant(?\DateTimeInterface $dateDebutAvenant): self
    {
        $this->dateDebutAvenant = $dateDebutAvenant;

        return $this;
    }

    public function getDateFinAvenant(): ?\DateTimeInterface
    {
        return $this->dateFinAvenant;
    }

    public function setDateFinAvenant(?\DateTimeInterface $dateFinAvenant): self
    {
        $this->dateFinAvenant = $dateFinAvenant;

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

    public function getCommentaires(): ?string
    {
        return $this->commentaires;
    }

    public function setCommentaires(?string $commentaires): self
    {
        $this->commentaires = $commentaires;

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
