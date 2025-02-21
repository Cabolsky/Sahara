<?php

namespace App\Controller;

use App\Repository\CommentairesRepository;
use App\Repository\ContactRepository;
use App\Repository\ArticleRepository;
use App\Repository\CircuitsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CircuitController extends AbstractController
{
    private $commentairesRepository;
    private $contactRepository;
    private $articleRepository;
    private $circuitsRepository;

    public function __construct(
        CommentairesRepository $commentairesRepository,
        ContactRepository $contactRepository,
        ArticleRepository $articleRepository,
        CircuitsRepository $circuitsRepository
    ) {
        $this->commentairesRepository = $commentairesRepository;
        $this->contactRepository = $contactRepository;
        $this->articleRepository = $articleRepository;
        $this->circuitsRepository = $circuitsRepository;
    }

    #[Route('/circuit', name: 'app_circuit')]
    public function index(): Response
    {
        $circuits = $this->circuitsRepository->findAll();
        $commentaires = $this->commentairesRepository->findAll();
        $contact = $this->contactRepository->findOneBy([]);
        $article3 = $this->articleRepository->find(3);

        return $this->render('circuit/index.html.twig', [
            'circuits' => $circuits,
            'commentaires' => $commentaires,
            'contact' => $contact,
            'article3' => $article3,
            'title' => 'Circuits - Escapade Sahara',
        ]);
    }

    #[Route('/circuit/{id}', name: 'circuit_detail')]
    public function detail($id): Response
    {
        $circuit = $this->circuitsRepository->find($id);

        if (!$circuit) {
            throw $this->createNotFoundException('Circuit non trouvé');
        }

        $commentaires = $this->commentairesRepository->findAll();
        $contact = $this->contactRepository->findOneBy([]);
        $article3 = $this->articleRepository->find(3);

        return $this->render('circuit/detail.html.twig', [
            'circuit'      => $circuit,
            'commentaires' => $commentaires,
            'contact'      => $contact,
            'article3'     => $article3,
            'title'        => 'Circuits - Escapade Sahara',
        ]);
    }
}
