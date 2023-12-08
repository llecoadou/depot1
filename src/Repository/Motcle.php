<?php

namespace App\Repository;

use Doctrine\ORM\Mapping as ORM;

/**
 * Motcle
 *
 * @ORM\Table(name="motcle")
 * @ORM\Entity
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

}
