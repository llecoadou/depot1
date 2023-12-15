<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="App\Repository\CategorieRepository")
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="REFCAT", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $refcat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBCAT", type="string", length=255, nullable=true, options={"fixed"=true})
     */
    private $libcat;

    public function getRefcat(): ?string
    {
        return $this->refcat;
    }

    public function getLibcat(): ?string
    {
        return $this->libcat;
    }

    public function setLibcat(?string $libcat): static
    {
        $this->libcat = $libcat;

        return $this;
    }


}
