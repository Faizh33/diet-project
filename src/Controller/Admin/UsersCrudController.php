<?php

namespace App\Controller\Admin;

use App\Entity\Users;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class UsersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Users::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('lastName')
                ->setLabel('Nom'),
            TextField::new('firstName')
                ->setLabel('Prénom'),
            TextField::new('userName')
                ->setLabel('Nom d\'utilisateur'),
            AssociationField::new('diets')
                ->setLabel('Régimes')
                ->setFormTypeOptions([
                'multiple' => true,
                ]),
            AssociationField::new('allergens')
                ->setLabel('Allergènes')
                ->setFormTypeOptions([
                    'multiple' => true,
                ]),
        ];
    }
}
