<?php

// src/Form/PatientFormType.php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PatientFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            //sous formulaire du patient
            ->add('patientForm', PatientInfosFormType::class, [
                'label' => false,
            ])
            //sous formulaire de user
            ->add('userForm', UserFormType::class, [
                'label' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
        ]);
    }
}