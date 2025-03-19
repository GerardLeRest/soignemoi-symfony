<?php
// src/Form/MainFormType.php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Form\UserFormType;

class UserPatientFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('patientForm', PatientFormType::class, [
                'label' => false, // Masquer le label du sous-formulaire
            ])
            ->add('userForm', UserFormType::class, [
                'label' => false, // Masquer le label du sous-formulaire
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // pas de class - on ne peut pas gérer les deux classes
            //  le formulaire n'est pas lié à une entité spécifique
            ]);
    }
}