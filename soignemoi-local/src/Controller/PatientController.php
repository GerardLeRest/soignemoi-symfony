<?php

namespace App\Controller;

use App\Form\PatientFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

final class PatientController extends AbstractController
{
    #[Route('/formulaire/patient', name: 'app_patient')]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        $form = $this->createForm(PatientFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user = $form->get('userForm')->getData();
            $patient = $form->get('patientForm')->getData();

            $user->setPassword(
                $passwordHasher->hashPassword($user, $user->getPassword())
            );

            $user->setRoles(['ROLE_PATIENT']);

            $patient->setUser($user);
            
            $entityManager->persist($user);
            $entityManager->persist($patient);
            
            $entityManager->flush();

            return $this->redirectToRoute('app_home');
        }

        return $this->render('patient/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}