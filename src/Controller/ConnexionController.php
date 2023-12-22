<?php

namespace App\Controller;
use App\Repository\UtilisateurRepository;
use App\Security\UserProvider;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Security\User;


class ConnexionController extends AbstractController
{
    #[Route('/connexion', name: 'connexion.index', methods:['GET'])]
    public function index(UtilisateurRepository $utilisateurRepository): Response
    {
        /*$leUser = new User();
        $leUser->setUsername('test@test1.fr');
        $leUser->verifierUtilisateur($utilisateurRepository);
        dd($leUser);*/
        $leUser = new UserProvider($utilisateurRepository);
        $leUser->loadUserByIdentifier('test@test1.fr');
        //dd($leUser);
        return $this->render('connexion/index.html.twig');
    }
}
