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
        $user = $this->getUser();

        $recipes= $this->recipesRepository->findAll();

        $itemsPerPage = $user && $this->isGranted('ROLE_ADMIN') ? 0 : 6;

        $pagination = $paginator->paginate(
            $recipes,
            $request->query->getInt('page', 1),
            $itemsPerPage
        );


        return $this->render('recipes.html.twig', [
            'pagination' => $pagination,
        ]);
    }
}