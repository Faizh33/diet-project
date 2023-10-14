<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PrivacyPolicyController extends AbstractController
{
#[Route('/politique-de-confidentialite')]
    public function index() : Response
    {
        return $this->render('privacy-policy.html.twig');
    }
}