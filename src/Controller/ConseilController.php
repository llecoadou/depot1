<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Conseil;
use App\Repository\ConseilRepository;

class ConseilController extends AbstractController
{
    #[Route('/conseil', name: 'conseil.index', methods:['GET'])]
    public function index(ConseilRepository $conseilRepository): Response
    {
        $lesConseils = $conseilRepository->findAll();
        //dd($lesConseils);

        return $this->render('conseil/index.html.twig', [
            'controller_name' => 'ConseilController','modifHeader'=>1 , 'lesConseils' => $lesConseils
        ]);
    }
}
