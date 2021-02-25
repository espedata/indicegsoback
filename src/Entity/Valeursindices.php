<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

/**
 * Valeursindices
 *
 * @ORM\Table(name="valeursindices", indexes={@ORM\Index(name="fk_valeursindices_listeindices1_idx", columns={"IDindice"})})
 * @ORM\Entity
 * @ApiResource(
 *      normalizationContext={"groups"={"read"}},
 *      denormalizationContext={"groups"={"write"}},
 * )
 * @ApiFilter(SearchFilter::class, properties={"idindice"})
 */
class Valeursindices
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDvaleurindice", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups({"write","read"})
     */
    private $idvaleurindice;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DateValeur", type="datetime", nullable=true)
     * @Groups({"write","read"})
     */
    private $datevaleur;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Valeur", type="float", precision=10, scale=0, nullable=true)
     * @Groups({"write","read"})
     */
    private $valeur;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DatePublicationMTBP", type="datetime", nullable=true)
     * @Groups({"write","read"})
     */
    private $datepublicationmtbp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Observation", type="text", length=0, nullable=true)
     * @Groups({"write","read"})
     */
    private $observation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDindice", type="integer", nullable=true)
     * @Groups({"write","read"})
     */
    private $idindice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Obs_statut", type="string", length=45, nullable=true)
     * @Groups({"write","read"})
     */
    private $obsStatut;

    public function getIdvaleurindice(): ?int
    {
        return $this->idvaleurindice;
    }

    public function getDatevaleur(): ?\DateTimeInterface
    {
        return $this->datevaleur;
    }

    public function setDatevaleur(?\DateTimeInterface $datevaleur): self
    {
        $this->datevaleur = $datevaleur;

        return $this;
    }

    public function getValeur(): ?float
    {
        return $this->valeur;
    }

    public function setValeur(?float $valeur): self
    {
        $this->valeur = $valeur;

        return $this;
    }

    public function getDatepublicationmtbp(): ?\DateTimeInterface
    {
        return $this->datepublicationmtbp;
    }

    public function setDatepublicationmtbp(?\DateTimeInterface $datepublicationmtbp): self
    {
        $this->datepublicationmtbp = $datepublicationmtbp;

        return $this;
    }

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(?string $observation): self
    {
        $this->observation = $observation;

        return $this;
    }

    public function getIdindice(): ?int
    {
        return $this->idindice;
    }

    public function setIdindice(?int $idindice): self
    {
        $this->idindice = $idindice;

        return $this;
    }

    public function getObsStatut(): ?string
    {
        return $this->obsStatut;
    }

    public function setObsStatut(?string $obsStatut): self
    {
        $this->obsStatut = $obsStatut;

        return $this;
    }


}
