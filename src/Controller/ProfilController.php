<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UtilisateurRepository;
use App\Repository\CommandeRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Utilisateur;

class ProfilController extends AbstractController
{
    #[Route('/profil', name: 'profil.index', methods:['GET','POST'])]
    public function index(
        UtilisateurRepository $utilisateurRepository,
        CommandeRepository $commandeRepository,
        Request $request
    ): Response {
        $utilisateurr = $utilisateurRepository->find($this->getUser()->getUtilisateur());
        //$utilisateur = $utilisateurRepository->find($this->getUser()->getUsername());
        //dd($utilisateurr);

        $lesCommandes = $commandeRepository->findBy(['id'=>$this->getUser()->getUtilisateur()]);
        $message = "";
        /*if ($utilisateurr == null) {
            $utilisateur = new utilisateur();
            $utilisateur->setLogin($utilisateur);
        } else {
            $utilisateur = $utilisateurr;
        }*/
        //dd($lesCommandes);
        if($request->request->get('valider')) {
            $utilisateur->setNomcli($request->request->get('login'));
            dd($utilisateur);
            $utilisateur->setPassCli($request->request->get('mdp'));
            $utilisateur->setNom($request->request->get('nom'));

            $utilisateur->setPrenom($request->request->get('prenom'));
            $utilisateur->setRue($request->request->get('rue'));
            $utilisateur->setCp($request->request->get('cp'));
            $utilisateur->setVille($request->request->get('ville'));
            $utilisateur->setTel($request->request->get('tel'));
            $utilisateur->setEmail($request->request->get('email'));
            $utilisateur->setLogin($utilisateur);


            //dd($utilisateur);
            if($utilisateurr != null) {

                //dd("test");
                // $utilisateurRepository->remove($utilisateur, true);
            }
            // $utilisateurRepository->remove($utilisateur, true);
            $utilisateurRepository->save($utilisateur, true);
            $message = 'Les modifications sont correctement enregistrées !';
        }
        return $this->render('profil/index.html.twig', [
            'utilisateur'=>$utilisateur, 'lesCommandes'=>$lesCommandes, 'message'=>$message
        ]);
}
}