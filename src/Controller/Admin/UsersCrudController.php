<?php

namespace App\Controller\Admin;

use App\Entity\Users;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormBuilderInterface;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Config\KeyValueStore;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UsersCrudController extends AbstractCrudController
{
    private $userPasswordHasher;

    public function __construct(
        UserPasswordHasherInterface $userPasswordHasher
    ) {
        $this->userPasswordHasher = $userPasswordHasher;
    }

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
            EmailField::new('email')
                ->setLabel('Email'),
            TextField::new('password')
                ->setLabel('Mot de passe')
                ->onlyOnForms(),
            AssociationField::new('diets')
                ->setLabel('Régimes')
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
                    return implode(', ', $dietNames);
                }),
            AssociationField::new('allergens')
                ->setLabel('Allergènes')
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
                    return implode(', ', $allergenNames);
                }),
        ];
    }

    
    public function createNewFormBuilder(EntityDto $entityDto, KeyValueStore $formOptions, AdminContext $context): FormBuilderInterface
    {
        $formBuilder = parent::createNewFormBuilder($entityDto, $formOptions, $context);
        return $this->addPasswordEventListener($formBuilder);
    }

    public function createEditFormBuilder(EntityDto $entityDto, KeyValueStore $formOptions, AdminContext $context): FormBuilderInterface
    {
        $formBuilder = parent::createEditFormBuilder($entityDto, $formOptions, $context);
        return $this->addPasswordEventListener($formBuilder);
    }

    private function addPasswordEventListener(FormBuilderInterface $formBuilder): FormBuilderInterface
    {
        return $formBuilder->addEventListener(FormEvents::POST_SUBMIT, $this->hashPassword());
    }

    private function hashPassword(): \Closure
    {
        return function($event) {
            $form = $event->getForm();
            if (!$form->isValid()) {
                return;
            }
            $password = $form->get('password')->getData();
            if ($password === null) {
                return;
            }
    
            $user = $form->getData();
            $hash = $this->userPasswordHasher->hashPassword($user, $password);
            $user->setPassword($hash);
        };
    }    
}