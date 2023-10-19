<?php

namespace App\Controller;

use App\Entity\Steps;
use App\Entity\Recipes;
use App\Entity\Reviews;
use App\Form\ReviewsType;
use App\Repository\RecipesRepository;
use App\Repository\ReviewsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class RecipeDetailsController extends AbstractController
{
    private $em;
    private $reviewsRepository;

    public function __construct(EntityManagerInterface $em, ReviewsRepository $reviewsRepository)
    {
        $this->em = $em;
        $this->reviewsRepository = $reviewsRepository;
    }

    #[Route('/recettes/{id}')]
    public function index(Request $request, $id): Response
    {
        $reviews = $this->reviewsRepository->findAll();
        $recipesRepository = $this->em->getRepository(Recipes::class);
        $recipe = $recipesRepository->find($id);
        $user = $this->getUser();
    
        $stepsRepository = $this->em->getRepository(Steps::class);
        $sortedSteps = $stepsRepository->findBy(
            ['recipes' => $recipe],
            ['orderNumber' => 'ASC']
        );
    
        $review = new Reviews();
        $review->setRecipes($recipe);
        $review->setUsers($user);
    
        $form = $this->createForm(ReviewsType::class, $review);
    
        $form->handleRequest($request);
        if ($request->isMethod('POST') && $form->isSubmitted() && $form->isValid()) {
            $selectedRate = $request->request->get('rating');
    
            if ($selectedRate === null) {
                return new JsonResponse(['success' => false, 'message' => 'Veuillez sélectionner une note en cliquant sur les étoiles']);
            }
    
            $review->setRate($selectedRate);
    
            $this->em->persist($review);
            $this->em->flush();
    
            return new JsonResponse(['success' => true, 'message' => 'Votre avis a été posté. Bonne journée :)']);
        }
    
        return $this->render('recipe-details.html.twig', [
            'sortedSteps' => $sortedSteps,
            'form' => $form->createView(),
            'reviews' => $reviews,
            'recipe' => $recipe,
            'user' => $user,
        ]);
    }    
}
