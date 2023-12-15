<?php

namespace App\Repository;

use Doctrine\ORM\Mapping as ORM;

/**
 * Animal
 *
 * @ORM\Table(name="animal", indexes={@ORM\Index(name="I_FK_ANIMAL_UTILISATEUR", columns={"ID"})})
 * @ORM\Entity
 */
class Animal
{
    /**
     * @var int
     *
     * @ORM\Column(name="NUMANIMAL", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numanimal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMANIMAL", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $nomanimal;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AGEANIMAL", type="integer", nullable=true)
     */
    private $ageanimal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RACEANIMAL", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $raceanimal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PROPRIANIMAL", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $proprianimal;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID", referencedColumnName="ID")
     * })
     */
    private $id;


}
