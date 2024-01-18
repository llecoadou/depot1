<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\CommandeRepository;
use App\Repository\UtilisateurRepository;
use App\Entity\Commande;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PanierController extends AbstractController
{
    public function fonctionController(SessionInterface $session)
    {
        //exemple :
        //lire une variable de session
        $variable = $session->get('nom_de_variable');
        //ecrire une variable de session
        $session->set('nom_de_variable', 'valeur_de_variable');
        // Supprimer une variable de session
        $session->remove('nom_de_variable');
    }
    #[Route('/panier', name: 'panier.index', methods:['GET'])]
    public function index(ProduitRepository $produitRepository, SessionInterface $session): Response
    {
        $lesProduits=[];
        if($session->get('produit') != null) {
            foreach($session->get('produit') as $cle => $value) {
                $leProduit = $produitRepository->find($cle);
                if($leProduit != null) {
                    $lesProduits[]=$leProduit;
                }
            }
        }
        return $this->render('panier/index.html.twig', ['lesProduits' => $lesProduits]);
    }

    #[Route('/panier/ajouter/{id}', name: 'panier.ajouter', methods:['GET'])]
    public function ajouter($id, SessionInterface $session)
    {
        if($session->get('produit') == null) {
            $session->set('produit', []);
        }

        $temp=$session->get('produit', []);

        $test=false;

        foreach($temp as $key=>$value) {
            if($key ==$id) {
                $test=true;
            }
        }
        if($test) {
            return new JsonResponse(['success' => false]);
        } else {
            $temp[$id]=1;
            $session->set('produit', $temp);
            $session->set('produitTotal', count($session->get('produit')));
            return new JsonResponse(['success' => true]);
        }

    }

    #[Route('/panier/supprimer/{id}', name: 'panier.supprimer', methods:['GET'])]
    public function supprimer($id, SessionInterface $session)
    {
        $tab= $session->get('produit');

        unset($tab[$id]);

        $session->set('produit', $tab);

        $session->set('produitTotal', count($session->get('produit')));

        return new JsonResponse(['success' => true]);

    }

    /*#[Route('/commande', name: 'panier.commande', methods:['GET'])]
    public function commande(SessionInterface $session): Response
    {
        return $this->render('panier/commande.html.twig');
    }*/

    #[Route('/panier/commande/', 'panier.commande', methods: ['GET','POST'])]
    public function commande(EntityManagerInterface $entityManager, SessionInterface $session, Request $request, CommandeRepository $commandeRepository, UtilisateurRepository $utilisateurRepository, produitRepository $produitRepository): Response
    {
        //On vérifie que la commande est validée
        if ($request->request->get('valider')) {
            //On récupère le utilisateur en cours
            $utilisateur = $utilisateurRepository->find($this->getUSer()->getUsername());

            //Création d'une nouvelle commande
            $laCommande = new Commande();
            //On met à jour la commande
            $laCommande->setLogin($utilisateur);
            /* On ajoute les produits à la commande. !!! attention
            cela génère des lignecommandes avec des qtité vides*/
            foreach ($session->get('produit') as $key => $value) {
                $laCommande->addReference($produitRepository->find($key));
            }
            //On enrgeistre la commande dans la bdd
            $commandeRepository->save($laCommande, true);
            //Récupération de la dernière commande
            $derniereCommande = $commandeRepository->findLast();
            // dd($derniereCommande-›getNocommande());
            //On crée une instance de connexion
            $connection = $entityManager->getConnection();
            //MAJ de la table lignecommande
            //dd($session->get('produit'));
            foreach ($session->get('produit') as $key => $value) {

                //MAJ avec une requête SQL brute forcée
                $sql = 'UPDATE lignecommande l set l.QTITE="'.$value .'" WHERE l.NOCOMMANDE="'. $derniereCommande->getNocommande() . '" AND l.REFERENCE = "'. $key . '";';
                // dd($sql);
                $result = $connection->executeQuery($sql, []);
            }
            //Suppression des sessions nécessaires au panier
            $session->remove('produit');
            $session->remove('produitTotal');
            $session->remove('totalPanier');

            // on renvoie au controller produit
            return new RedirectResponse('../../produit', 302, []);
        }
        //Si la commande n'est pas validée, on affiche la cB pour validation
        return $this->render('panier/commande.html.twig');
    }
}
