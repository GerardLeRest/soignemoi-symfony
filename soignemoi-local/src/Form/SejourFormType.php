<?php

namespace App\Form;

use App\Entity\Patient;
use App\Entity\Sejour;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SejourFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateDebut', DateType::class, [
                'label' => 'Date de début',
                    //attr: éléments personnels
                'attr' => [
                    'placeholder' => 'Entrez la date de début',
                    // class bootstap pour les formulaires
                    'class' => 'form-control',    
                ] 
            ])
            ->add('dateFin', DateType::class, [
                'label' => 'Date de fin',
                'required' => false,    // saisie onn ogligatoire pour valider le NULL
                'attr' => [
                    'placeholder' => 'Entrez la date de fin',
                    'class' => 'form-control',    
                ] 
            ])
            ->add('motifSejour', TextareaType::class, [
                'label' => 'Motif du sjour',
                'attr' => [
                    'placeholder' => 'Entrez le motif du séjour',
                    'class' => 'form-control',    
                ] 
            ])
            ->add('specialite', TextType::class, [
                'label' => 'Spécialité',
                'attr' => [
                    'placeholder' => 'Entrez la spécialité',
                    'class' => 'form-control',    
                ] 
            ])
            ->add('medecinSouhaite', TextType::class, [
                'label' => 'Médecin souhaité',
                'required' => false, // Permet au champ d'être vide
                'attr' => [
                    'placeholder' => 'Entrez le médecin souhaité',
                    'required' => false, // Désactive l'attribut HTML "required"
                    'class' => 'form-control',    
                ] 
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sejour::class,
        ]);
    }
}
