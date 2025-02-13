<?php

// src/Controller/ExcursionController.php

namespace App\Controller;

use App\Repository\CommentairesRepository;
use App\Repository\ContactRepository;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ExcursionController extends AbstractController
{
    private $commentairesRepository;
    private $contactRepository;
    private $articleRepository;

    public function __construct(
        CommentairesRepository $commentairesRepository,
        ContactRepository $contactRepository,
        ArticleRepository $articleRepository
    )
    {
        $this->commentairesRepository = $commentairesRepository;
        $this->contactRepository = $contactRepository;
        $this->articleRepository = $articleRepository;
    }

    #[Route('/excursion', name: 'app_excursion')]
    public function index(): Response
    {
        $excursions = [
            1 => 'Excursion 1',
            2 => 'Excursion 2',
            3 => 'Excursion 3',
        ];

        $commentaires = $this->commentairesRepository->findAll();

        $contact = $this->contactRepository->findOneBy([]);

        $article4 = $this->articleRepository->find(4);

        return $this->render('excursion/index.html.twig', [
            'excursions' => $excursions,
            'commentaires' => $commentaires,
            'contact' => $contact,
            'article4' => $article4,
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

        $commentaires = $this->commentairesRepository->findAll();

        $contact = $this->contactRepository->findOneBy([]);

        $article4 = $this->articleRepository->find(4);

        return $this->render('excursion/detail.html.twig', [
            'excursion' => $excursions[$id],
            'commentaires' => $commentaires,
            'contact' => $contact,
            'article4' => $article4,
        ]);
    }
}
