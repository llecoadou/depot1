<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateurRepository")
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMCLI", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $nomcli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRENOMCLI", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $prenomcli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MAILCLI", type="string", length=50, nullable=true, options={"fixed"=true})
     */
    private $mailcli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PASSCLI", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $passcli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADRCLI", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $adrcli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CPCLI", type="integer", nullable=true)
     */
    private $cpcli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VILLECLI", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $villecli;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomcli(): ?string
    {
        return $this->nomcli;
    }

    public function setNomcli(?string $nomcli): static
    {
        $this->nomcli = $nomcli;

        return $this;
    }

    public function getPrenomcli(): ?string
    {
        return $this->prenomcli;
    }

    public function setPrenomcli(?string $prenomcli): static
    {
        $this->prenomcli = $prenomcli;

        return $this;
    }

    public function getMailcli(): ?string
    {
        return $this->mailcli;
    }

    public function setMailcli(?string $mailcli): static
    {
        $this->mailcli = $mailcli;

        return $this;
    }

    public function getPasscli(): ?string
    {
        return $this->passcli;
    }

    public function setPasscli(?string $passcli): static
    {
        $this->passcli = $passcli;

        return $this;
    }

    public function getAdrcli(): ?string
    {
        return $this->adrcli;
    }

    public function setAdrcli(?string $adrcli): static
    {
        $this->adrcli = $adrcli;

        return $this;
    }

    public function getCpcli(): ?int
    {
        return $this->cpcli;
    }

    public function setCpcli(?int $cpcli): static
    {
        $this->cpcli = $cpcli;

        return $this;
    }

    public function getVillecli(): ?string
    {
        return $this->villecli;
    }

    public function setVillecli(?string $villecli): static
    {
        $this->villecli = $villecli;

        return $this;
    }


}
