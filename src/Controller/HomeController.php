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


        $contact = $contactRepository->findOneBy([]);

        return $this->render('home/index.html.twig', [
            'article1' => $article1, 
            'article2' => $article2,

            'commentaires' => $commentaires,
            'contact' => $contact,
        ]);
    }
}
