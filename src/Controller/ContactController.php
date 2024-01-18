<?php

namespace App\Controller;
use App\Repository\UtilisateurRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact.index', methods:['GET', 'POST'])]
    public function index( MailerInterface $mailer,UtilisateurRepository $utilisateurRepository, Request $request): Response
    {
       /* //$contact = new Contact();
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        $message = null;
        if($form->isSubmitted() && $form->isValid()) {
            /*$admin = $personneRepository->find('admin');
            $contact->setLogin($admin);
            $contactRepository->save($contact, true);
            $message = 'Contact correctement enregistrée !';
            $email = (new Email())
        ->from('hello@gmail.com')
        ->to('kalinfos53@gmail.com')
        //->cc('cc@example.com')
        //->bcc('bcc@example.com')
        //->replyTo('fabien@example.com')
        //->priority(Email::PRIORITY_HIGH)
        ->subject('Time for Symfony Mailer!')
        ->text('Sending emails is fun again!')
        ->html('<p>See Twig integration for better HTML integration!</p>');

        $mailer->send($email);
            //retrun $this->redirectToRoute('accueil.index);
        }*/
        return $this->render('contact/index.html.twig', [
            'formulaire' => $form->createView(), 'message' =>$message
        ]);
    }

    /*
    public function sendEmail(MailerInterface $mailer): Response
    {
        $email = (new Email())
        ->from('hello@gmail.com')
        ->to('kalinfos53@gmail.com')
        //->cc('cc@example.com')
        //->bcc('bcc@example.com')
        //->replyTo('fabien@example.com')
        //->priority(Email::PRIORITY_HIGH)
        ->subject('Time for Symfony Mailer!')
        ->text('Sending emails is fun again!')
        ->html('<p>See Twig integration for better HTML integration!</p>');

        $mailer->send($email);

        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }*/
}
