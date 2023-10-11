<?php

namespace App\Controller;

use App\Entity\Steps;
use App\Entity\Recipes;
use App\Repository\RecipesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RecipeDetailsController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/recettes/{id}')]
    public function index($id): Response
    {
        $recipesRepository = $this->em->getRepository(Recipes::class);
        $recipe = $recipesRepository->find($id);

        $stepsRepository = $this->em->getRepository(Steps::class);
        $sortedSteps = $stepsRepository->findBy(
            ['recipes' => $recipe], // Filtrer par la recette spécifique
            ['orderNumber' => 'ASC'] // Tri par orderNumber en ordre croissant
        );

        return $this->render('recipe-details.html.twig', [
            'recipe' => $recipe,
            'sortedSteps' => $sortedSteps,
        ]);
    }
}
