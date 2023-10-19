<?php

namespace App\Controller\Admin;

use App\Entity\Recipes;
use App\Form\StepsType;
use App\Form\IngredientsType;
use Symfony\Component\Validator\Constraints\File;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
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
            BooleanField::new('visibility', 'Visibilité')
            ->setHelp('Invisible pour les utilisateurs non connectés si coché'),
            TextField::new('title')
            ->setLabel('Nom de la recette'),
            ImageField::new('pictureName')
            ->setLabel('Image')
            ->setBasePath('pictures/')
            ->setUploadDir('public/pictures')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setHelp('Formats de fichiers acceptés : JPG, PNG.')
            ->setFormTypeOptions([
                'allow_delete' => false,
            ])
            ->setCustomOption('constraints', [
                new File([
                    'maxSize' => '3072k',
                    'mimeTypes' => [
                        'image/jpeg',
                        'image/png',
                    ],
                    'mimeTypesMessage' => 'Merci de télécharger une image valide (JPG ou PNG).',
                ])
            ]),
            TextField::new('pictureName')
            ->hideOnForm()
            ->hideOnIndex()
            ->setLabel('Image de la recette'),
            TextEditorField::new('description')
                ->onlyOnForms(),
            IntegerField::new('preparationTime')
            ->setLabel('Temps de préparation (en mn)')
            ->onlyOnForms(),
            IntegerField::new('breakTime')
            ->setLabel('Temps de repos (en mn)')
            ->onlyOnForms(),
            IntegerField::new('cookingTime')
            ->setLabel('Temps de cuisson (en mn)')
            ->onlyOnForms(),
            CollectionField::new('ingredients')
                ->setEntryType(IngredientsType::class)
                ->setLabel('Ingrédients')
                ->onlyOnForms()
                ->setFormTypeOptions([
                    'allow_add' => true,
                    'by_reference' => false,
                ]),
            AssociationField::new('diets')
            ->setLabel('Régimes concernés')
            ->setFormTypeOptions([
                'multiple' => true,
                'by_reference' => false,
            ])
            ->formatValue(function ($value, $entity) {
                $diets = $entity->getDiets();
                $dietNames = [];
                foreach ($diets as $diet) {
                    $dietNames[] = $diet->getName();
                }
                return implode(', <br>', $dietNames);
            }),
            AssociationField::new('allergens')
            ->setLabel('Allergènes présents')
            ->setFormTypeOptions([
                'multiple' => true,
                'by_reference' => false,
            ])
            ->formatValue(function ($value, $entity) {
                $allergens = $entity->getAllergens();
                $allergenNames = [];
                foreach ($allergens as $allergen) {
                    $allergenNames[] = $allergen->getName();
                }
                return implode(', <br>', $allergenNames);
            }),
            CollectionField::new('steps')
            ->setEntryType(StepsType::class)
            ->setLabel('Étapes')
            ->onlyOnForms()
            ->setFormTypeOptions([
                'allow_add' => true,
                'by_reference' => false,
            ]),
        ];
    }
}
