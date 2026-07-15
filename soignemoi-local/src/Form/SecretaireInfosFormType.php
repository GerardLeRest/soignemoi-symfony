<?php
// src/Form/SecretaireInfosFormType.php

namespace App\Form;

use App\Entity\Secretaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SecretaireInfosFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prenom', TextType::class, [
                'label' =>"Prénom",
                'attr' => [ 
                    'placeholder' => 'Entrez le prénom',
                    'class' => 'form-control',  
                ]   
            ])
            ->add('nom', TextType::class, [
                'label' =>"Nom",
                'attr' => [ 
                    'placeholder' => 'Entrez le nom',
                    'class' => 'form-control',  
                ]   
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Secretaire::class,
        ]);
    }
}