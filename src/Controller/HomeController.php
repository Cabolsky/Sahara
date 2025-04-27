<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\CommentairesRepository;
use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(
        ArticleRepository $articleRepository,
        CommentairesRepository $commentairesRepository,
        ContactRepository $contactRepository
    ): Response {
        $article1 = $articleRepository->find(1);
        $article2 = $articleRepository->find(2);

        $commentaires = $commentairesRepository->findAll();
        $contact      = $contactRepository->findOneBy([]);

        return $this->render('home/index.html.twig', [
            'title'        => 'Accueil - Escapade Sahara',
            'meta_description' => 'Bienvenue sur Escapade Sahara : circuits sur mesure, excursions dans le désert, expériences inoubliables au Maroc.',
            'meta_keywords' => 'circuits, excursions, désert, Maroc, voyage, aventure, trekking, bivouac, escapade Sahara, Ouarzazate, Merzouga, Ait Ben Haddou, excursions privées, randonnée, dromadaire, désert marocain, voyage sur mesure, famille, tourisme, vacances au Maroc',
            'article1'     => $article1,
            'article2'     => $article2,
            'commentaires' => $commentaires,
            'contact'      => $contact,
        ]);
    }
}
