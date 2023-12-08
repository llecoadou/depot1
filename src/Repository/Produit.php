<?php

namespace App\Repository;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="I_FK_PRODUIT_CATEGORIE", columns={"REFCAT"})})
 * @ORM\Entity
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

}
