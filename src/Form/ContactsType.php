<?php

namespace App\Form;

use App\Entity\Contacts;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => false,
                'attr' => [
                    'class'=>'form-control', 
                    'id' => 'lastname', 
                    'required' => 'required',
                    'placeholder' => 'Votre nom',
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => false,
                'attr' => [
                    'class'=>'form-control', 
                    'id' => 'email', 
                    'required' => 'required',
                    'placeholder' => 'Votre email',
                ],
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Posez-moi votre question',
                'label_attr' => ['class' => 'label'],
                'attr' => ['class'=>'form-control', 'id' => 'message', 'required' => 'required', 'rows' => 5],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contacts::class,
        ]);
    }
}
