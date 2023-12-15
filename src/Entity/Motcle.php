<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Motcle
 *
 * @ORM\Table(name="motcle")
 * @ORM\Entity(repositoryClass="App\Repository\MotcleRepository")
 */
class Motcle
{
    /**
     * @var int
     *
     * @ORM\Column(name="NUMMOTCLE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nummotcle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBMOTCLE", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $libmotcle;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Conseil", mappedBy="nummotcle")
     */
    private $numconseil = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->numconseil = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getNummotcle(): ?int
    {
        return $this->nummotcle;
    }

    public function getLibmotcle(): ?string
    {
        return $this->libmotcle;
    }

    public function setLibmotcle(?string $libmotcle): static
    {
        $this->libmotcle = $libmotcle;

        return $this;
    }

    /**
     * @return Collection<int, Conseil>
     */
    public function getNumconseil(): Collection
    {
        return $this->numconseil;
    }

    public function addNumconseil(Conseil $numconseil): static
    {
        if (!$this->numconseil->contains($numconseil)) {
            $this->numconseil->add($numconseil);
            $numconseil->addNummotcle($this);
        }

        return $this;
    }

    public function removeNumconseil(Conseil $numconseil): static
    {
        if ($this->numconseil->removeElement($numconseil)) {
            $numconseil->removeNummotcle($this);
        }

        return $this;
    }

}
