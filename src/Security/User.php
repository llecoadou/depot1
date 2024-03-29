<?php

namespace App\Security;

use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;

class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    private $username;

    private $roles = [];

    private ?Utilisateur $utilisateur=null;

    /**
     * @var string The hashed password
     */
    private $password;

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->username;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getUtilisateur():?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        $this->getRoles();

        $this->password = $utilisateur->getPasscli();

        return $this;
    }
    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function verifierUtilisateur(UtilisateurRepository $utilisateurRepository): ?bool
    {
        //Todo
        $leUser = $utilisateurRepository->findOneBy(['nomcli'=>$this->username]);

        if(null != $leUser) {
            $this->setUtilisateur($leUser);
            return true;
        } else {
            return false;
        }
    }
}
