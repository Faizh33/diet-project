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
    public function recipes(Request $request, PaginatorInterface $paginator) : Response
    {
        $recipes= $this->recipesRepository->findAll();

        $pagination = $paginator->paginate(
            $recipes,
            $request->query->getInt('page', 1),
            6
        );


        return $this->render('recipes.html.twig', [
            'pagination' => $pagination,
        ]);
    }
}