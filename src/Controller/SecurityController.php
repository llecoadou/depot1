<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\UtilisateurRepository;
use App\Entity\Utilisateur;
use Exception;
use App\Security\User;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;


class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route(path: '/inscription', name:'app_register')]
    public function register(
        Request $request,
        ManagerRegistry $entityManager,
        AuthenticationUtils $authenticationUtils,
        UtilisateurRepository $utilisateurRepository
    ): Response {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        if($request->request->get('username')) {
            $utilisateur = new Utilisateur();
            $username = $request->request->get('username');
            $password = $request->request->get('password');
            $utilisateur->setNomcli($username);
            $utilisateur->setPasscli($password);

            try {
                $utilisateurRepository->save($utilisateur, true);
            } catch(Exception) {
                return $this->render('security/register.html.twig', ['last_username' => $lastUsername, 'error' => $error,
                'message'=>'une erreur est survenue']);
            }
        }
        return $this->render('security/register.html.twig', ['last_username' => $lastUsername, 'error' => $error, 'message'=>'']);
    }
}
