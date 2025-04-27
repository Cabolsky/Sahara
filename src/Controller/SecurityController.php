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
        return $this->render('security/login.html.twig', [
            'meta_keywords' => 'circuits, excursions, désert, Maroc, voyage, aventure, trekking, bivouac, escapade Sahara, Ouarzazate, Merzouga, Ait Ben Haddou, excursions privées, randonnée, dromadaire, désert marocain, voyage sur mesure, famille, tourisme, vacances au Maroc',
            'meta_description' => 'Escapade Sahara, une équipe passionnée par le désert marocain : authenticité, expérience familiale et voyages sur mesure.',
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        // Cette méthode est gérée par Symfony, donc pas besoin de code ici
    }
}
