<?php

namespace App\Controller;

use App\Repository\RecipesRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RecipesController extends AbstractController
{
    private $recipesRepository;

    public function __construct(RecipesRepository $recipesRepository)
    {
        $this->recipesRepository = $recipesRepository;
    }

    #[Route('/recettes')]
    public function recipes(Request $request, PaginatorInterface $paginator): Response
    {
        $user = $this->getUser();
    
        $allRecipes = $this->recipesRepository->findAll();
    
        $filteredRecipes = [];
    
        foreach ($allRecipes as $recipe) {
            $displayRecipe = false;
    
            if ($user === null || $this->isGranted('ROLE_ADMIN')) {
                $displayRecipe = true;
            } else {
                foreach ($user->getDiets() as $diet) {
                    foreach ($user->getAllergens() as $allergen) {
                        if ($recipe->getDiets()->contains($diet) && !$recipe->getAllergens()->contains($allergen)) {
                            $displayRecipe = true;
                            break 2;
                        }
                    }
                }
            }
    
            if ($user === null && $recipe->getVisibility()) {
                $displayRecipe = false;
            }
    
            if ($displayRecipe) {
                $filteredRecipes[] = $recipe;
            }
        }
    
        $pagination = $paginator->paginate(
            $filteredRecipes,
            $request->query->getInt('page', 1),
            6
        );
    
        return $this->render('recipes.html.twig', [
            'pagination' => $pagination,
        ]);
    }
}    