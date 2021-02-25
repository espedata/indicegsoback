<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

/**
 * Listeindices
 *
 * @ORM\Table(name="listeindices", indexes={@ORM\Index(name="fk_listeindices_formule_indexation1_idx", columns={"id_formule_indexation_liee"}), @ORM\Index(name="fk_listeindicesfondamentaux_client1", columns={"id_Client"})})
 * @ORM\Entity
 * @ApiResource(
 *      normalizationContext={"groups"={"read"}},
 *      denormalizationContext={"groups"={"write"}},
 * )
 * @ApiFilter(SearchFilter::class, properties={"majEspelia"})
 */
class Listeindices
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDindice", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups({"write","read"})
     */
    private $idindice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Sigle", type="string", length=50, nullable=true)
     * @Groups({"write","read"})
     */
    private $sigle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Description", type="text", length=0, nullable=true)
     * @Groups({"write","read"})
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Base", type="integer", nullable=true)
     * @Groups({"write","read"})
     */
    private $base;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DateBase", type="datetime", nullable=true)
     * @Groups({"write","read"})
     */
    private $datebase;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Obsolete", type="boolean", nullable=true)
     * @Groups({"write","read"})
     */
    private $obsolete = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_Client", type="integer", nullable=true)
     * @Groups({"write","read"})
     */
    private $idClient;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_formule_indexation_liee", type="integer", nullable=true)
     * @Groups({"write","read"})
     */
    private $idFormuleIndexationLiee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="idbank", type="string", length=45, nullable=true)
     * @Groups({"write","read"})
     */
    private $idbank;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_maj_insee", type="date", nullable=true)
     * @Groups({"write","read"})
     */
    private $dateMajInsee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="statut", type="string", length=45, nullable=true)
     * @Groups({"write","read"})
     */
    private $statut;

    /**
     * @var string|null
     *
     * @ORM\Column(name="formule_raccordement", type="string", length=500, nullable=true)
     * @Groups({"write","read"})
     */
    private $formuleRaccordement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_indice_raccorde", type="integer", nullable=true)
     * @Groups({"write","read"})
     */
    private $idIndiceRaccorde;

    /**
     * @var string|null
     *
     * @ORM\Column(name="indice_actuel", type="string", length=500, nullable=true)
     * @Groups({"write","read"})
     */
    private $indiceActuel;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_raccordement", type="datetime", nullable=true)
     * @Groups({"write","read"})
     */
    private $dateRaccordement;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="maj_Espelia", type="boolean", nullable=true)
     * @Groups({"write","read"})
     */
    private $majEspelia;

    /**
     * @var float|null
     *
     * @ORM\Column(name="valeur_raccordement_formule", type="float", precision=10, scale=0, nullable=true)
     * @Groups({"write","read"})
     */
    private $valeurRaccordementFormule;

    public function getIdindice(): ?int
    {
        return $this->idindice;
    }

    public function getSigle(): ?string
    {
        return $this->sigle;
    }

    public function setSigle(?string $sigle): self
    {
        $this->sigle = $sigle;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getBase(): ?int
    {
        return $this->base;
    }

    public function setBase(?int $base): self
    {
        $this->base = $base;

        return $this;
    }

    public function getDatebase(): ?\DateTimeInterface
    {
        return $this->datebase;
    }

    public function setDatebase(?\DateTimeInterface $datebase): self
    {
        $this->datebase = $datebase;

        return $this;
    }

    public function getObsolete(): ?bool
    {
        return $this->obsolete;
    }

    public function setObsolete(?bool $obsolete): self
    {
        $this->obsolete = $obsolete;

        return $this;
    }

    public function getIdClient(): ?int
    {
        return $this->idClient;
    }

    public function setIdClient(?int $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }

    public function getIdFormuleIndexationLiee(): ?int
    {
        return $this->idFormuleIndexationLiee;
    }

    public function setIdFormuleIndexationLiee(?int $idFormuleIndexationLiee): self
    {
        $this->idFormuleIndexationLiee = $idFormuleIndexationLiee;

        return $this;
    }

    public function getIdbank(): ?string
    {
        return $this->idbank;
    }

    public function setIdbank(?string $idbank): self
    {
        $this->idbank = $idbank;

        return $this;
    }

    public function getDateMajInsee(): ?\DateTimeInterface
    {
        return $this->dateMajInsee;
    }

    public function setDateMajInsee(?\DateTimeInterface $dateMajInsee): self
    {
        $this->dateMajInsee = $dateMajInsee;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getFormuleRaccordement(): ?string
    {
        return $this->formuleRaccordement;
    }

    public function setFormuleRaccordement(?string $formuleRaccordement): self
    {
        $this->formuleRaccordement = $formuleRaccordement;

        return $this;
    }

    public function getIdIndiceRaccorde(): ?int
    {
        return $this->idIndiceRaccorde;
    }

    public function setIdIndiceRaccorde(?int $idIndiceRaccorde): self
    {
        $this->idIndiceRaccorde = $idIndiceRaccorde;

        return $this;
    }

    public function getIndiceActuel(): ?string
    {
        return $this->indiceActuel;
    }

    public function setIndiceActuel(?string $indiceActuel): self
    {
        $this->indiceActuel = $indiceActuel;

        return $this;
    }

    public function getDateRaccordement(): ?\DateTimeInterface
    {
        return $this->dateRaccordement;
    }

    public function setDateRaccordement(?\DateTimeInterface $dateRaccordement): self
    {
        $this->dateRaccordement = $dateRaccordement;

        return $this;
    }

    public function getMajEspelia(): ?bool
    {
        return $this->majEspelia;
    }

    public function setMajEspelia(?bool $majEspelia): self
    {
        $this->majEspelia = $majEspelia;

        return $this;
    }

    public function getValeurRaccordementFormule(): ?float
    {
        return $this->valeurRaccordementFormule;
    }

    public function setValeurRaccordementFormule(?float $valeurRaccordementFormule): self
    {
        $this->valeurRaccordementFormule = $valeurRaccordementFormule;

        return $this;
    }


}
