<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Animal
 *
 * @ORM\Table(name="animal", indexes={@ORM\Index(name="I_FK_ANIMAL_UTILISATEUR", columns={"ID"})})
 * @ORM\Entity(repositoryClass="App\Repository\AnimalRepository")
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

    public function getNumanimal(): ?int
    {
        return $this->numanimal;
    }

    public function getNomanimal(): ?string
    {
        return $this->nomanimal;
    }

    public function setNomanimal(?string $nomanimal): static
    {
        $this->nomanimal = $nomanimal;

        return $this;
    }

    public function getAgeanimal(): ?int
    {
        return $this->ageanimal;
    }

    public function setAgeanimal(?int $ageanimal): static
    {
        $this->ageanimal = $ageanimal;

        return $this;
    }

    public function getRaceanimal(): ?string
    {
        return $this->raceanimal;
    }

    public function setRaceanimal(?string $raceanimal): static
    {
        $this->raceanimal = $raceanimal;

        return $this;
    }

    public function getProprianimal(): ?string
    {
        return $this->proprianimal;
    }

    public function setProprianimal(?string $proprianimal): static
    {
        $this->proprianimal = $proprianimal;

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


}
