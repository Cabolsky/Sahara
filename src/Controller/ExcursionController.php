<?php

namespace App\Controller;

use App\Repository\CommentairesRepository;
use App\Repository\ContactRepository;
use App\Repository\ArticleRepository;
use App\Repository\ExcursionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ExcursionController extends AbstractController
{
    private $commentairesRepository;
    private $contactRepository;
    private $articleRepository;
    private $excursionsRepository;

    public function __construct(
        CommentairesRepository $commentairesRepository,
        ContactRepository $contactRepository,
        ArticleRepository $articleRepository,
        ExcursionsRepository $excursionsRepository
    ) {
        $this->commentairesRepository = $commentairesRepository;
        $this->contactRepository      = $contactRepository;
        $this->articleRepository      = $articleRepository;
        $this->excursionsRepository   = $excursionsRepository;
    }

    #[Route('/excursion', name: 'app_excursion')]
    public function index(): Response
    {
        $excursions = $this->excursionsRepository->findAll();
        $commentaires = $this->commentairesRepository->findAll();
        $contact      = $this->contactRepository->findOneBy([]);
        $article4     = $this->articleRepository->find(4);

        return $this->render('excursion/index.html.twig', [
            'excursions'   => $excursions,
            'commentaires' => $commentaires,
            'contact'      => $contact,
            'article4'     => $article4,
            'title'        => 'Excursions - Escapade Sahara',
            'meta_keywords' => 'circuits, excursions, désert, Maroc, voyage, aventure, trekking, bivouac, escapade Sahara, Ouarzazate, Merzouga, Ait Ben Haddou, excursions privées, randonnée, dromadaire, désert marocain, voyage sur mesure, famille, tourisme, vacances au Maroc',
            'meta_description' => 'Partez pour une excursion en 4x4 dans le désert marocain : escapades sur mesure, immersion dans les dunes et villages traditionnels.',

        ]);
    }

    #[Route('/excursion/{id}', name: 'excursion_detail')]
    public function detail($id): Response
    {
        $excursion = $this->excursionsRepository->find($id);

        if (!$excursion) {
            throw $this->createNotFoundException('Excursion non trouvée');
        }

        $commentaires = $this->commentairesRepository->findAll();
        $contact      = $this->contactRepository->findOneBy([]);
        $article4     = $this->articleRepository->find(4);

        return $this->render('excursion/detail.html.twig', [
            'excursion'    => $excursion,
            'commentaires' => $commentaires,
            'contact'      => $contact,
            'article4'     => $article4,
            'title'        => 'Excursions - Escapade Sahara',
            'meta_keywords' => 'circuits, excursions, désert, Maroc, voyage, aventure, trekking, bivouac, escapade Sahara, Ouarzazate, Merzouga, Ait Ben Haddou, excursions privées, randonnée, dromadaire, désert marocain, voyage sur mesure, famille, tourisme, vacances au Maroc',
            'meta_description' => 'Partez pour une excursion en 4x4 dans le désert marocain : escapades sur mesure, immersion dans les dunes et villages traditionnels.',

        ]);
    }
}
