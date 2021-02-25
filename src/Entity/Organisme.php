<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Organisme
 *
 * @ORM\Table(name="organisme", indexes={@ORM\Index(name="id_Client", columns={"id_Client"}), @ORM\Index(name="Code_Organisme", columns={"Code_Organisme"}), @ORM\Index(name="nom_organisme", columns={"nom_organisme"})})
 * @ORM\Entity
 */
class Organisme
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Organisme", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrganisme;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_organisme", type="string", length=255, nullable=false)
     */
    private $nomOrganisme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Sigle_Organisme", type="string", length=255, nullable=true)
     */
    private $sigleOrganisme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Adresse_1", type="string", length=255, nullable=true)
     */
    private $adresse1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Adresse_2", type="string", length=255, nullable=true)
     */
    private $adresse2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Code_Postal", type="string", length=255, nullable=true)
     */
    private $codePostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Bureau_Distributeur", type="string", length=255, nullable=true)
     */
    private $bureauDistributeur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Telephone", type="string", length=50, nullable=true)
     */
    private $telephone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Fax", type="string", length=50, nullable=true)
     */
    private $fax;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Code_Organisme", type="integer", nullable=true)
     */
    private $codeOrganisme = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Adresse_electronique", type="string", length=255, nullable=true)
     */
    private $adresseElectronique;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Complet", type="string", length=255, nullable=true)
     */
    private $nomComplet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodeSIREN", type="string", length=255, nullable=true)
     */
    private $codesiren;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IdSISPEA_Organism", type="integer", nullable=true)
     */
    private $idsispeaOrganism;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Logo_organisme", type="string", length=45, nullable=true)
     */
    private $logoOrganisme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Adresse_0", type="string", length=45, nullable=true)
     */
    private $adresse0;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Client", referencedColumnName="id_Client")
     * })
     */
    private $idClient;

    public function getIdOrganisme(): ?int
    {
        return $this->idOrganisme;
    }

    public function getNomOrganisme(): ?string
    {
        return $this->nomOrganisme;
    }

    public function setNomOrganisme(string $nomOrganisme): self
    {
        $this->nomOrganisme = $nomOrganisme;

        return $this;
    }

    public function getSigleOrganisme(): ?string
    {
        return $this->sigleOrganisme;
    }

    public function setSigleOrganisme(?string $sigleOrganisme): self
    {
        $this->sigleOrganisme = $sigleOrganisme;

        return $this;
    }

    public function getAdresse1(): ?string
    {
        return $this->adresse1;
    }

    public function setAdresse1(?string $adresse1): self
    {
        $this->adresse1 = $adresse1;

        return $this;
    }

    public function getAdresse2(): ?string
    {
        return $this->adresse2;
    }

    public function setAdresse2(?string $adresse2): self
    {
        $this->adresse2 = $adresse2;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(?string $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getBureauDistributeur(): ?string
    {
        return $this->bureauDistributeur;
    }

    public function setBureauDistributeur(?string $bureauDistributeur): self
    {
        $this->bureauDistributeur = $bureauDistributeur;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getCodeOrganisme(): ?int
    {
        return $this->codeOrganisme;
    }

    public function setCodeOrganisme(?int $codeOrganisme): self
    {
        $this->codeOrganisme = $codeOrganisme;

        return $this;
    }

    public function getAdresseElectronique(): ?string
    {
        return $this->adresseElectronique;
    }

    public function setAdresseElectronique(?string $adresseElectronique): self
    {
        $this->adresseElectronique = $adresseElectronique;

        return $this;
    }

    public function getNomComplet(): ?string
    {
        return $this->nomComplet;
    }

    public function setNomComplet(?string $nomComplet): self
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    public function getCodesiren(): ?string
    {
        return $this->codesiren;
    }

    public function setCodesiren(?string $codesiren): self
    {
        $this->codesiren = $codesiren;

        return $this;
    }

    public function getIdsispeaOrganism(): ?int
    {
        return $this->idsispeaOrganism;
    }

    public function setIdsispeaOrganism(?int $idsispeaOrganism): self
    {
        $this->idsispeaOrganism = $idsispeaOrganism;

        return $this;
    }

    public function getLogoOrganisme(): ?string
    {
        return $this->logoOrganisme;
    }

    public function setLogoOrganisme(?string $logoOrganisme): self
    {
        $this->logoOrganisme = $logoOrganisme;

        return $this;
    }

    public function getAdresse0(): ?string
    {
        return $this->adresse0;
    }

    public function setAdresse0(?string $adresse0): self
    {
        $this->adresse0 = $adresse0;

        return $this;
    }

    public function getIdClient(): ?Client
    {
        return $this->idClient;
    }

    public function setIdClient(?Client $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }


}
