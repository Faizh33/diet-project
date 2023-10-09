<?php

namespace App\Controller\Admin;

use App\Entity\Diets;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class DietsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Diets::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name')
                ->setLabel('Nom du régime'),
        ];
    }
}
