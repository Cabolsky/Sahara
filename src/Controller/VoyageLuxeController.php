<?php

// src/Controller/VoyageLuxeController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class VoyageLuxeController extends AbstractController
{
    #[Route('/voyage-luxe', name: 'app_voyage_luxe')]
    public function index(): Response
    {
        $voyagesLuxe = [
            1 => 'Voyage de Luxe 1',
            2 => 'Voyage de Luxe 2',
            3 => 'Voyage de Luxe 3',
        ];

        return $this->render('voyage_luxe/index.html.twig', [
            'voyagesLuxe' => $voyagesLuxe,
        ]);
    }

    #[Route('/voyage-luxe/{id}', name: 'voyage_luxe_detail')]
    public function detail($id): Response
    {
        $voyagesLuxe = [
            1 => 'Voyage de Luxe 1',
            2 => 'Voyage de Luxe 2',
            3 => 'Voyage de Luxe 3',
        ];

        if (!isset($voyagesLuxe[$id])) {
            throw $this->createNotFoundException('Voyage de luxe non trouvé');
        }

        return $this->render('voyage_luxe/detail.html.twig', [
            'voyageLuxe' => $voyagesLuxe[$id],
        ]);
    }
}

