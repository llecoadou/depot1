<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="I_FK_COMMANDE_UTILISATEUR", columns={"ID"})})
 * @ORM\Entity(repositoryClass="App\Repository\CommandeRepository")
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="NUMCOM", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numcom;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATECOM", type="datetime", nullable=true)
     */
    private $datecom;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID", referencedColumnName="ID")
     * })
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Produit", inversedBy="numcom")
     * @ORM\JoinTable(name="posseder",
     *   joinColumns={
     *     @ORM\JoinColumn(name="NUMCOM", referencedColumnName="NUMCOM")
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
        $this->refprod = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getNumcom(): ?string
    {
        return $this->numcom;
    }

    public function getDatecom(): ?\DateTimeInterface
    {
        return $this->datecom;
    }

    public function setDatecom(?\DateTimeInterface $datecom): static
    {
        $this->datecom = $datecom;

        return $this;
    }

    public function getId(): ?Utilisateur
    {
        return $this->id;
    }

    public function setId(?Utilisateur $id): static
    {
        $this->id = $id;

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
