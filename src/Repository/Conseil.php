<?php

namespace App\Repository;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conseil
 *
 * @ORM\Table(name="conseil")
 * @ORM\Entity
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

}
