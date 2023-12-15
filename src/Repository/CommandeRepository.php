<?php

namespace App\Repository;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="I_FK_COMMANDE_UTILISATEUR", columns={"ID"})})
 * @ORM\Entity
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

}
