<?php

namespace App\Controller\Admin;

use App\Entity\Recipes;
use App\Form\StepsType;
use App\Form\IngredientsType;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class RecipesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Recipes::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title')
            ->setLabel('Nom de la recette'),
            TextEditorField::new('description'),
            IntegerField::new('preparationTime')
            ->setLabel('Temps de préparation en minutes'),
            IntegerField::new('breakTime')
            ->setLabel('Temps de repos en minutes'),
            IntegerField::new('cookingTime')
            ->setLabel('Temps de cuisson en minutes'),
            CollectionField::new('ingredients')
                ->setEntryType(IngredientsType::class)
                ->setLabel('Ingrédients')
                ->setFormTypeOptions([
                    'allow_add' => true,
                    'by_reference' => false,
                ]),
            AssociationField::new('diets')
            ->setLabel('Régimes concernés')
            ->setFormTypeOptions([
                'multiple' => true,
            ]),
            AssociationField::new('allergens')
            ->setLabel('Allergènes présents')
            ->setFormTypeOptions([
                'multiple' => true,
            ]),
            CollectionField::new('steps')
            ->setEntryType(StepsType::class)
            ->setLabel('Étapes')
            ->setFormTypeOptions([
                'allow_add' => true,
                'by_reference' => false,
            ]),
        ];
    }
}
