<?php
namespace App\Controller;

use App\Entity\Contacts;
use App\Form\ContactsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{

    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/')]
    public function contact(Request $request) : Response
    {
        $contact = new Contacts();
        $form = $this->createForm(ContactsType::class, $contact);
    
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {    
            $this->em->persist($contact);
            $this->em->flush();
    
            $this->addFlash('success', 'Votre message a été posté. Bonne journée :)');
    
            return $this->redirectToRoute('recettes/{id}');
        } elseif ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Il y a des erreurs dans le formulaire. Veuillez le corriger.');
        }

        return $this->render('contact.html.twig', [
            'form' => $form,
        ]);
    }
}