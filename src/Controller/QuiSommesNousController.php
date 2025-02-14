<?php

namespace App\Controller;

use App\Repository\CommentairesRepository;
use App\Repository\ContactRepository;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class QuiSommesNousController extends AbstractController
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
        $this->contactRepository      = $contactRepository;
        $this->articleRepository      = $articleRepository;
    }

    #[Route('/qui/sommes/nous', name: 'app_qui_sommes_nous')]
    public function index(): Response
    {
        $commentaires = $this->commentairesRepository->findAll();
        $contact      = $this->contactRepository->findOneBy([]);
        $article5     = $this->articleRepository->find(5);
        $article6     = $this->articleRepository->find(6);

        return $this->render('qui_sommes_nous/index.html.twig', [
            'controller_name' => 'QuiSommesNousController',
            'commentaires'    => $commentaires,
            'contact'         => $contact,
            'article5'        => $article5,
            'article6'        => $article6,
        ]);
    }
}
