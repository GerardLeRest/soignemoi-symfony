<?php

namespace App\Form;

use App\Entity\Medecin;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class MedecinType extends AbstractType
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
            ->add('matricule', TextType::class, [
                'label' =>"Matricule",
                'attr' => [ 
                    'placeholder' => 'Entrez votre matricule',
                    'class' => 'form-control',  
                ]   
            ])
            ->add('specialite', TextType::class, [
                'label' => 'Spécialité',
                'attr' => [ 
                    'placeholder' => 'Entrez votre spécialité',
                    'class' => 'form-control', 
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Medecin::class,
        ]);
    }
}
