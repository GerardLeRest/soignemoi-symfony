<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserPatientFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Sous-formulaire contenant les informations du patient
            ->add('patientForm', PatientFormType::class, [
                'label' => false, // Ne pas afficher le titre du sous-formulaire
            ])

            // Sous-formulaire contenant les informations du compte utilisateur
            ->add('userForm', UserFormType::class, [
                'label' => false, // Ne pas afficher le titre du sous-formulaire
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Ce formulaire regroupe deux entités (User et Patient).
            // Il n'est donc associé à aucune entité (pas de data_class).
        ]);
    }
}