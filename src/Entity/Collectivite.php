<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Collectivite
 *
 * @ORM\Table(name="collectivite", uniqueConstraints={@ORM\UniqueConstraint(name="ID_Organisme", columns={"ID_Organisme"})}, indexes={@ORM\Index(name="collectivite_idx_type_epci", columns={"type_epci_id"}), @ORM\Index(name="id_Client_idx", columns={"id_Client"})})
 * @ORM\Entity
 */
class Collectivite
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Collectivite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCollectivite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_Client", type="integer", nullable=true)
     */
    private $idClient;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date_Creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodeServiceAEP", type="string", length=255, nullable=true)
     */
    private $codeserviceaep;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodeServiceASS", type="string", length=255, nullable=true)
     */
    private $codeserviceass;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodeServiceAssNC", type="string", length=255, nullable=true)
     */
    private $codeserviceassnc;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="InvalideAEP", type="boolean", nullable=true)
     */
    private $invalideaep;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="InvalideASS", type="boolean", nullable=true)
     */
    private $invalideass;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="InvalideAssNC", type="boolean", nullable=true)
     */
    private $invalideassnc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DateInvaliditeAEP", type="datetime", nullable=true)
     */
    private $dateinvaliditeaep;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DateInvaliditeASS", type="datetime", nullable=true)
     */
    private $dateinvaliditeass;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DateInvaliditeAssNC", type="datetime", nullable=true)
     */
    private $dateinvaliditeassnc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Residents_Permanents", type="integer", nullable=true)
     */
    private $residentsPermanents;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Commentaire_collectivite", type="text", length=0, nullable=true)
     */
    private $commentaireCollectivite;

    /**
     * @var \AppTypeEpci
     *
     * @ORM\ManyToOne(targetEntity="AppTypeEpci")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_epci_id", referencedColumnName="id")
     * })
     */
    private $typeEpci;

    /**
     * @var \Organisme
     *
     * @ORM\ManyToOne(targetEntity="Organisme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Organisme", referencedColumnName="ID_Organisme")
     * })
     */
    private $idOrganisme;

    public function getIdCollectivite(): ?int
    {
        return $this->idCollectivite;
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

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getCodeserviceaep(): ?string
    {
        return $this->codeserviceaep;
    }

    public function setCodeserviceaep(?string $codeserviceaep): self
    {
        $this->codeserviceaep = $codeserviceaep;

        return $this;
    }

    public function getCodeserviceass(): ?string
    {
        return $this->codeserviceass;
    }

    public function setCodeserviceass(?string $codeserviceass): self
    {
        $this->codeserviceass = $codeserviceass;

        return $this;
    }

    public function getCodeserviceassnc(): ?string
    {
        return $this->codeserviceassnc;
    }

    public function setCodeserviceassnc(?string $codeserviceassnc): self
    {
        $this->codeserviceassnc = $codeserviceassnc;

        return $this;
    }

    public function getInvalideaep(): ?bool
    {
        return $this->invalideaep;
    }

    public function setInvalideaep(?bool $invalideaep): self
    {
        $this->invalideaep = $invalideaep;

        return $this;
    }

    public function getInvalideass(): ?bool
    {
        return $this->invalideass;
    }

    public function setInvalideass(?bool $invalideass): self
    {
        $this->invalideass = $invalideass;

        return $this;
    }

    public function getInvalideassnc(): ?bool
    {
        return $this->invalideassnc;
    }

    public function setInvalideassnc(?bool $invalideassnc): self
    {
        $this->invalideassnc = $invalideassnc;

        return $this;
    }

    public function getDateinvaliditeaep(): ?\DateTimeInterface
    {
        return $this->dateinvaliditeaep;
    }

    public function setDateinvaliditeaep(?\DateTimeInterface $dateinvaliditeaep): self
    {
        $this->dateinvaliditeaep = $dateinvaliditeaep;

        return $this;
    }

    public function getDateinvaliditeass(): ?\DateTimeInterface
    {
        return $this->dateinvaliditeass;
    }

    public function setDateinvaliditeass(?\DateTimeInterface $dateinvaliditeass): self
    {
        $this->dateinvaliditeass = $dateinvaliditeass;

        return $this;
    }

    public function getDateinvaliditeassnc(): ?\DateTimeInterface
    {
        return $this->dateinvaliditeassnc;
    }

    public function setDateinvaliditeassnc(?\DateTimeInterface $dateinvaliditeassnc): self
    {
        $this->dateinvaliditeassnc = $dateinvaliditeassnc;

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

    public function getCommentaireCollectivite(): ?string
    {
        return $this->commentaireCollectivite;
    }

    public function setCommentaireCollectivite(?string $commentaireCollectivite): self
    {
        $this->commentaireCollectivite = $commentaireCollectivite;

        return $this;
    }

    public function getTypeEpci(): ?AppTypeEpci
    {
        return $this->typeEpci;
    }

    public function setTypeEpci(?AppTypeEpci $typeEpci): self
    {
        $this->typeEpci = $typeEpci;

        return $this;
    }

    public function getIdOrganisme(): ?Organisme
    {
        return $this->idOrganisme;
    }

    public function setIdOrganisme(?Organisme $idOrganisme): self
    {
        $this->idOrganisme = $idOrganisme;

        return $this;
    }


}
