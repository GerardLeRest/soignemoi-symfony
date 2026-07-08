<?php
// src/Form/PatientInfosFormType.php

namespace App\Form;

use App\Entity\Patient;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PatientInfosFormType extends AbstractType
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
            ])
            ->add('adressePostale', TextType::class, [
                'label' =>"Prénom",
                'attr' => [ 
                    'placeholder' => 'Entrez l\'adresse',
                    'class' => 'form-control',  
                ]   
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Patient::class,
        ]);
    }
}