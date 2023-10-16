<?php

namespace App\Controller\Admin;

use App\Entity\Users;
use Symfony\Component\Form\FormEvents;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use Symfony\Component\Form\FormBuilderInterface;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Config\KeyValueStore;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Form\Extension\Core\Type\PasswordType; // Ajout du namespace

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
        $fields = [
            TextField::new('lastName')->setLabel('Nom'),
            TextField::new('firstName')->setLabel('Prénom'),
            EmailField::new('email')->setLabel('Email'),
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

        if ($pageName === Crud::PAGE_NEW) {
            $fields[] = TextField::new('password')->setLabel('Mot de passe');
        }

        if ($pageName === Crud::PAGE_EDIT) {
            $fields[] = TextField::new('plainPassword')->setLabel('Nouveau mot de passe');
        }

        return $fields;
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
        return function ($event) {
            $form = $event->getForm();
            if (!$form->isValid()) {
                return;
            }

            $user = $form->getData();
            $plainPassword = $form->get('plainPassword')->getData();
            if ($plainPassword !== null) {
                $hash = $this->userPasswordHasher->hashPassword($user, $plainPassword);
                $user->setPassword($hash);
                $user->eraseCredentials();
            }
        };
    }
}
