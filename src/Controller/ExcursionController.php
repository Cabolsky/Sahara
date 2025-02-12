<?php

// src/Controller/ExcursionController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ExcursionController extends AbstractController
{
    #[Route('/excursion', name: 'app_excursion')]
    public function index(): Response
    {
        $excursions = [
            1 => 'Excursion 1',
            2 => 'Excursion 2',
            3 => 'Excursion 3',
        ];

        return $this->render('excursion/index.html.twig', [
            'excursions' => $excursions,
        ]);
    }

    #[Route('/excursion/{id}', name: 'excursion_detail')]
    public function detail($id): Response
    {
        $excursions = [
            1 => 'Excursion 1',
            2 => 'Excursion 2',
            3 => 'Excursion 3',
        ];

        if (!isset($excursions[$id])) {
            throw $this->createNotFoundException('Excursion non trouvée');
        }

        return $this->render('excursion/detail.html.twig', [
            'excursion' => $excursions[$id],
        ]);
    }
}
