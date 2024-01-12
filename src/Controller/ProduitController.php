<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;

class ProduitController extends AbstractController
{
    #[Route('/boutique', name: 'boutique.index', methods:['GET'])]
    public function index(CategorieRepository $categorieRepository): Response
    {
        $lesCategories =$categorieRepository->findAll();
        //dd($lesCategories);
        return $this->render('boutique/index.html.twig', [
            'lesCategories' => $lesCategories
        ]);
    }

    #[Route('/boutique/liste/{id}', name: 'boutique.liste', methods:['GET'])]
    public function liste(ProduitRepository $produitRepository, CategorieRepository $categorieRepository, $id): Response
    {
        $laCategorie = $categorieRepository->findByNumero($id);

        $lesProduits = $produitRepository->findAll();
        $lesProduitsSelonUneCategorie = new ArrayCollection([]);
        foreach ($lesProduits as $value) {
            if ($value->getRefcat()->getRefcat() == (int) $id) {
                $lesProduitsSelonUneCategorie->add($value);
            }
        }
        return $this->render('boutique/liste.html.twig', ['lesProduits' => $lesProduitsSelonUneCategorie, 'laCategorie' => $laCategorie]);
    }
    #[Route('/boutique/detail/{id}', name: 'boutique.detail', methods:['GET'])]
    public function detail(ProduitRepository $produitRepository, $id): Response
    {
        $leProduit = $produitRepository->findByNumero($id);
        return $this->render('boutique/detail.html.twig', [
            'leProduit' => $leProduit,
        ]);
    }
}