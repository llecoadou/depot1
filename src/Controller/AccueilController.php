<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'accueil.index', methods:['GET'])]
    public function index(): Response
    {
<<<<<<< HEAD
        /*$contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        $message=null;

        if ($form->isSubmitted() && $form->isValid()) {

            $admin=$personneRepository->find('admin');
            $contact->setLogin($admin);
            $contactRepository->save($contact, true);
            $message= 'Contact correctement enregistrée !';

        }*/
=======
>>>>>>> 0d5258580595446fe6fb24e8023be336c4c8df3c
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }
}

