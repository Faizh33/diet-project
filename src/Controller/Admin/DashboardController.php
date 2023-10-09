<?php

namespace App\Controller\Admin;

use App\Entity\Diets;
use App\Entity\Users;
use App\Entity\Recipes;
use App\Entity\Allergens;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    public function __construct(private AdminUrlGenerator $adminUrlGenerator) {
    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $url = $this->adminUrlGenerator
            ->setController(UsersCrudController::class)
            ->generateUrl();

        return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Sandrine Coupart');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Tableau de bord', 'fa fa-home');

        yield MenuItem::linkToDashboard('Patients');
        
        yield MenuItem::subMenu('Actions', 'fas fa-bars')->setSubItems([
            MenuItem::linkToCrud('Nouveau Patient', 'fas fa-plus', Users::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Voir les Patients', 'fas fa-eye', Users::class)
        ]);
        
        yield MenuItem::linkToDashboard('Recettes');

        yield MenuItem::subMenu('Actions', 'fas fa-bars')->setSubItems([
            MenuItem::linkToCrud('Nouvelle Recette', 'fas fa-plus', Recipes::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Voir les Recettes', 'fas fa-eye', Recipes::class)
        ]);
        
        yield MenuItem::linkToDashboard('Régimes');

        yield MenuItem::subMenu('Actions', 'fas fa-bars')->setSubItems([
            MenuItem::linkToCrud('Nouveau Régime', 'fas fa-plus', Diets::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Voir les Régimes', 'fas fa-eye', Diets::class)
        ]);

        yield MenuItem::linkToDashboard('Allergènes');

        yield MenuItem::subMenu('Actions', 'fas fa-bars')->setSubItems([
            MenuItem::linkToCrud('Nouvel Allergène', 'fas fa-plus', Allergens::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Voir les Allergènes', 'fas fa-eye', Allergens::class)
        ]);
    }
}
