<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="I_FK_PRODUIT_CATEGORIE", columns={"REFCAT"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProduitRepository")
 */
class Produit
{
    /**
     * @var string
     *
     * @ORM\Column(name="REFPROD", type="string", length=32, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $refprod;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLEPROD", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $libelleprod;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PRIXPROD", type="integer", nullable=true)
     */
    private $prixprod;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=255, nullable=true, options={"fixed"=true})
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IMAGE", type="blob", length=0, nullable=true)
     */
    private $image;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="REFCAT", referencedColumnName="REFCAT")
     * })
     */
    private $refcat;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Conseil", mappedBy="refprod")
     */
    private $numconseil = array();

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Commande", mappedBy="refprod")
     */
    private $numcom = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->numconseil = new \Doctrine\Common\Collections\ArrayCollection();
        $this->numcom = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getRefprod(): ?string
    {
        return $this->refprod;
    }

    public function getLibelleprod(): ?string
    {
        return $this->libelleprod;
    }

    public function setLibelleprod(?string $libelleprod): static
    {
        $this->libelleprod = $libelleprod;

        return $this;
    }

    public function getPrixprod(): ?int
    {
        return $this->prixprod;
    }

    public function setPrixprod(?int $prixprod): static
    {
        $this->prixprod = $prixprod;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getRefcat(): ?Categorie
    {
        return $this->refcat;
    }

    public function setRefcat(?Categorie $refcat): static
    {
        $this->refcat = $refcat;

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
            $numconseil->addRefprod($this);
        }

        return $this;
    }

    public function removeNumconseil(Conseil $numconseil): static
    {
        if ($this->numconseil->removeElement($numconseil)) {
            $numconseil->removeRefprod($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Commande>
     */
    public function getNumcom(): Collection
    {
        return $this->numcom;
    }

    public function addNumcom(Commande $numcom): static
    {
        if (!$this->numcom->contains($numcom)) {
            $this->numcom->add($numcom);
            $numcom->addRefprod($this);
        }

        return $this;
    }

    public function removeNumcom(Commande $numcom): static
    {
        if ($this->numcom->removeElement($numcom)) {
            $numcom->removeRefprod($this);
        }

        return $this;
    }

}
