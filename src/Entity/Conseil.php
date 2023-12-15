<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Conseil
 *
 * @ORM\Table(name="conseil")
 * @ORM\Entity(repositoryClass="App\Repository\ConseilRepository")
 */
class Conseil
{
    /**
     * @var int
     *
     * @ORM\Column(name="NUMCONSEIL", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numconseil;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESCCONSEIL", type="string", length=255, nullable=true, options={"fixed"=true})
     */
    private $descconseil;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Motcle", inversedBy="numconseil")
     * @ORM\JoinTable(name="rechercher",
     *   joinColumns={
     *     @ORM\JoinColumn(name="NUMCONSEIL", referencedColumnName="NUMCONSEIL")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="NUMMOTCLE", referencedColumnName="NUMMOTCLE")
     *   }
     * )
     */
    private $nummotcle = array();

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Produit", inversedBy="numconseil")
     * @ORM\JoinTable(name="selectionner",
     *   joinColumns={
     *     @ORM\JoinColumn(name="NUMCONSEIL", referencedColumnName="NUMCONSEIL")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="REFPROD", referencedColumnName="REFPROD")
     *   }
     * )
     */
    private $refprod = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nummotcle = new \Doctrine\Common\Collections\ArrayCollection();
        $this->refprod = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getNumconseil(): ?int
    {
        return $this->numconseil;
    }

    public function getDescconseil(): ?string
    {
        return $this->descconseil;
    }

    public function setDescconseil(?string $descconseil): static
    {
        $this->descconseil = $descconseil;

        return $this;
    }

    /**
     * @return Collection<int, Motcle>
     */
    public function getNummotcle(): Collection
    {
        return $this->nummotcle;
    }

    public function addNummotcle(Motcle $nummotcle): static
    {
        if (!$this->nummotcle->contains($nummotcle)) {
            $this->nummotcle->add($nummotcle);
        }

        return $this;
    }

    public function removeNummotcle(Motcle $nummotcle): static
    {
        $this->nummotcle->removeElement($nummotcle);

        return $this;
    }

    /**
     * @return Collection<int, Produit>
     */
    public function getRefprod(): Collection
    {
        return $this->refprod;
    }

    public function addRefprod(Produit $refprod): static
    {
        if (!$this->refprod->contains($refprod)) {
            $this->refprod->add($refprod);
        }

        return $this;
    }

    public function removeRefprod(Produit $refprod): static
    {
        $this->refprod->removeElement($refprod);

        return $this;
    }

}
