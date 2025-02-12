<?php

// src/Controller/CircuitController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CircuitController extends AbstractController
{
    #[Route('/circuit', name: 'app_circuit')]
    public function index(): Response
    {
        $circuits = [
            1 => 'Circuit 1',
            2 => 'Circuit 2',
            3 => 'Circuit 3',
        ];

        return $this->render('circuit/index.html.twig', [
            'circuits' => $circuits,
        ]);
    }

    #[Route('/circuit/{id}', name: 'circuit_detail')]
    public function detail($id): Response
    {
        $circuits = [
            1 => 'Circuit 1',
            2 => 'Circuit 2',
            3 => 'Circuit 3',
        ];

        if (!isset($circuits[$id])) {
            throw $this->createNotFoundException('Circuit non trouvé');
        }

        return $this->render('circuit/detail.html.twig', [
            'circuit' => $circuits[$id],
        ]);
    }
}
