<?php

namespace App\Form;

use App\Entity\Patient;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class PatientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                    //attr: éléments personnels
                'attr' => [
                    'placeholder' => 'Entrez votre prénom',
                    // class bootstap pour les formulaires
                    'class' => 'form-control',    
                ] 
            ])
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'placeholder' => 'Entrez votre nom',
                    'class' => 'form-control',    
                ] 
            ])
            ->add('adressePostale', TextType::class, [
                'label' => 'Adresse postale',
                'attr' => [
                    'placeholder' => 'Entrez votre adresse',
                    'class' => 'form-control',    
                ] 
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => [
                    'placeholder' => 'Entrez votre email',
                    'class' => 'form-control',    
                ] 
            ])
            ->add('motDePasse', PasswordType::class, [
                'label' => 'Entrez votre Mot de Passe',
                'attr' => ['placeholder' => 'Entrez votre mot de passe',
                    // class bootstap pour les formulaires
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
