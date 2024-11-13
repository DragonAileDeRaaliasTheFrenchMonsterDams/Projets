<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BluffandTellController extends AbstractController
{
    #[Route('/', name: 'app_bluffandtell')]
    public function index(): Response
    {
        return $this->render('bluffand_tell/home.html.twig', [
            'controller_name' => 'BluffandTellController',
        ]);
    }
}

class RegistrationController extends AbstractController
{
    public function index(UserPasswordHasherInterface $passwordHasher): Response
    {
        // ... e.g. get the user data from a registration form
        $user = new User();
        $plaintextPassword = "";

        // hash the password (based on the security.yaml config for the $user class)
        $hashedPassword = $passwordHasher->hashPassword(
            $user,
            $plaintextPassword
        );
        $user->setPassword($hashedPassword);

        // ...
    }
}