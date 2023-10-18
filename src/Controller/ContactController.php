<?php
namespace App\Controller;

use App\Entity\Contacts;
use App\Form\ContactsType;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{

    private $em;
    private $mailer;

    public function __construct(EntityManagerInterface $em, MailerInterface $mailer)
    {
        $this->em = $em;
        $this->mailer = $mailer;
    }

    #[Route('/contact')]
    public function contact(Request $request) : Response
    {
        $contact = new Contacts();
        $form = $this->createForm(ContactsType::class, $contact);
    
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {    
            $this->em->persist($contact);
            $this->em->flush();
    
            // Envoi de l'e-mail
            $email = (new Email())
            ->from('erika_redon@hotmail.com')
            ->to('erika_redon@hotmail.com')
            ->subject('Nouveau message de contact n°' . $contact->getId())
            ->html(
                '<p><b>Nom : </b>' . $contact->getName() . '<br><b>Email : </b>' . $contact->getEmail() . '<br><br><b>Message : </b>' . $contact->getMessage() . '</p>'
            );

            $this->mailer->send($email);

            $this->addFlash('success', 'Votre message a été posté. Bonne journée :)');
    
            return $this->redirectToRoute('contact');
        } elseif ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Il y a des erreurs dans le formulaire. Veuillez le corriger.');
        }

        return $this->render('contact.html.twig', [
            'form' => $form,
        ]);
    }
}