<?php

namespace App\Controller;

use App\Entity\Diets;
use App\Entity\Allergens;
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

        // Récupérez la liste de toutes les recettes depuis le repository
        $allRecipes = $this->recipesRepository->findAll();

        // Initialisez un tableau vide pour stocker les recettes filtrées
        $filteredRecipes = [];

        // Parcourez toutes les recettes
        foreach ($allRecipes as $recipe) {
            $displayRecipe = false;

            if ($user === null || $this->isGranted('ROLE_ADMIN')) {
                $displayRecipe = true;
            } else {
                foreach ($user->getDiets() as $diet) {
                    foreach ($user->getAllergens() as $allergen) {
                        if ($recipe->getDiets()->contains($diet) && !$recipe->getAllergens()->contains($allergen)) {
                            $displayRecipe = true;
                            break 2; // Sortez des boucles dès que vous avez une correspondance
                        }
                    }
                }
            }

            if ($displayRecipe) {
                $filteredRecipes[] = $recipe;
            }
        }

        $itemsPerPage = $user && $this->isGranted('ROLE_ADMIN') ? 0 : 6;

        // Utilisez le tableau de recettes filtrées pour créer une pagination
        $pagination = $paginator->paginate(
            $filteredRecipes,
            $request->query->getInt('page', 1),
            $itemsPerPage
        );

        return $this->render('recipes.html.twig', [
            'pagination' => $pagination,
        ]);
    }
}
