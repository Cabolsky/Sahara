<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\CommentairesRepository;
use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ContactController extends AbstractController
{
    private $commentairesRepository;
    private $contactRepository;
    private $articleRepository;

    public function __construct(
        CommentairesRepository $commentairesRepository,
        ContactRepository $contactRepository,
        ArticleRepository $articleRepository
    ) {
        $this->commentairesRepository = $commentairesRepository;
        $this->contactRepository = $contactRepository;
        $this->articleRepository = $articleRepository;
    }

    #[Route('/contact', name: 'app_contact')]
    public function index(): Response
    {
        $commentaires = $this->commentairesRepository->findAll();
        $contact = $this->contactRepository->findOneBy([]);
        $article7 = $this->articleRepository->find(7);

        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'commentaires'    => $commentaires,
            'contact'         => $contact,
            'article7'        => $article7,
            'title'           => 'Contact - Escapade Sahara',
            'meta_keywords' => 'circuits, excursions, désert, Maroc, voyage, aventure, trekking, bivouac, escapade Sahara, Ouarzazate, Merzouga, Ait Ben Haddou, excursions privées, randonnée, dromadaire, désert marocain, voyage sur mesure, famille, tourisme, vacances au Maroc',
            'meta_description' => 'Contactez Escapade Sahara pour organiser votre circuit ou excursion dans le désert marocain. Réponse rapide et conseils personnalisés.',

        ]);
    }
}
