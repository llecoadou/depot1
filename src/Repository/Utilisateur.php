<?php

namespace App\Repository;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity
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


}
