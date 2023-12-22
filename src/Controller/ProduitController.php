<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProduitRepository;
class ProduitController extends AbstractController
{
    #[Route('/boutique', name: 'boutique.index', methods:['GET'])]
    public function index(): Response
    {
        return $this->render('boutique/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
}
