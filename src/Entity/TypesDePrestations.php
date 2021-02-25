<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypesDePrestations
 *
 * @ORM\Table(name="types_de_prestations")
 * @ORM\Entity
 */
class TypesDePrestations
{
    /**
     * @var int
     *
     * @ORM\Column(name="Code_Prestation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codePrestation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Libelle_Prestation", type="string", length=60, nullable=true)
     */
    private $libellePrestation;

    public function getCodePrestation(): ?int
    {
        return $this->codePrestation;
    }

    public function getLibellePrestation(): ?string
    {
        return $this->libellePrestation;
    }

    public function setLibellePrestation(?string $libellePrestation): self
    {
        $this->libellePrestation = $libellePrestation;

        return $this;
    }


}
