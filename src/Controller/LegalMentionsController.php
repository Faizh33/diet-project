<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LegalMentionsController extends AbstractController
{
#[Route('/mentions-legales')]
    public function index() : Response
    {
        return $this->render('legal-mentions.html.twig');
    }
}