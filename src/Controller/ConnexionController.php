<?php

namespace App\Controller;
use App\Repository\UtilisateurRepository;
use App\Security\UserProvider;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConnexionController extends AbstractController
{
    #[Route('/connexion', name: 'connexion.index', methods:['GET'])]
    public function index(): Response
    {
        $leUser = new User();
        $leUser->setUsername('test@test1.fr');
        $leUser->verifierPersonne($personneRepository);
        dd($leUser);
        return $this->render('connexion/index.html.twig', [
            'controller_name' => 'ConnexionController',
        ]);
    }
}
