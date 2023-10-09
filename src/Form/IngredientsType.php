<?php

namespace App\Form;

use App\Entity\Ingredients;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IngredientsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', null, [
                'label' => 'Nom de l\'ingrédient',
            ])
            ->add('quantity', null, [
                'label' => 'Quantité',
            ])
            ->add('unity', null, [
                'label' => 'Unité (kg, L, cuillère à café, ...)',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ingredients::class,
        ]);
    }
}
