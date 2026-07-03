<?php

namespace App\Form;

use App\Entity\Secretaire;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SecretaireFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                    //attr: éléments personnels
                'attr' => [
                    'placeholder' => 'Entrez le prénom',
                    // class bootstap pour les formulaires
                    'class' => 'form-control',    
                ] 
            ])
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'attr' => [                             
                    'placeholder' => 'Entrez le nom',
                    'class' => 'form-control',
                ]  
            ])
            ->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'email',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Secretaire::class,
        ]);
    }
}
