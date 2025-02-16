<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SecurityController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(Request $request): Response
    {

        return $this->render('security/login.html.twig');
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {

    }
}

