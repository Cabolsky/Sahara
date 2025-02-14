<?php

namespace App\Controller;

use App\Repository\CommentairesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class VoyageLuxeController extends AbstractController
{
    private $commentairesRepository;

    public function __construct(CommentairesRepository $commentairesRepository)
    {
        $this->commentairesRepository = $commentairesRepository;
    }

    #[Route('/voyage-luxe', name: 'app_voyage_luxe')]
    public function index(): Response
    {
        $voyagesLuxe = [
            1 => 'Voyage de Luxe 1',
            2 => 'Voyage de Luxe 2',
            3 => 'Voyage de Luxe 3',
        ];

        $commentaires = $this->commentairesRepository->findAll();

        return $this->render('voyage_luxe/index.html.twig', [
            'voyagesLuxe'  => $voyagesLuxe,
            'commentaires' => $commentaires,
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

        $commentaires = $this->commentairesRepository->findAll();

        return $this->render('voyage_luxe/detail.html.twig', [
            'voyageLuxe'   => $voyagesLuxe[$id],
            'commentaires' => $commentaires,
        ]);
    }
}
