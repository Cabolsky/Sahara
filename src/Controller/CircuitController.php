<?php

// src/Controller/CircuitController.php

namespace App\Controller;

use App\Repository\CommentairesRepository;
use App\Repository\ContactRepository;
use App\Repository\ArticleRepository;
use App\Repository\CircuitsRepository; // Ajoute cette ligne pour importer le repository des circuits
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CircuitController extends AbstractController
{
    private $commentairesRepository;
    private $contactRepository;
    private $articleRepository;
    private $circuitsRepository; // Ajoute cette propriété

    public function __construct(
        CommentairesRepository $commentairesRepository,
        ContactRepository $contactRepository,
        ArticleRepository $articleRepository,
        CircuitsRepository $circuitsRepository // Injecte le repository des circuits
    )
    {
        $this->commentairesRepository = $commentairesRepository;
        $this->contactRepository = $contactRepository;
        $this->articleRepository = $articleRepository;
        $this->circuitsRepository = $circuitsRepository; // Initialise le repository des circuits
    }

    #[Route('/circuit', name: 'app_circuit')]
    public function index(): Response
    {
        // Récupère tous les circuits depuis la base de données
        $circuits = $this->circuitsRepository->findAll();

        // Récupère les autres données comme avant
        $commentaires = $this->commentairesRepository->findAll();
        $contact = $this->contactRepository->findOneBy([]);
        $article3 = $this->articleRepository->find(3);

        return $this->render('circuit/index.html.twig', [
            'circuits' => $circuits, // Passe les circuits à la vue
            'commentaires' => $commentaires,
            'contact' => $contact,
            'article3' => $article3,
        ]);
    }

    #[Route('/circuit/{id}', name: 'circuit_detail')]
    public function detail($id): Response
    {
        // Récupère le circuit correspondant à l'ID
        $circuit = $this->circuitsRepository->find($id);
    
        if (!$circuit) {
            throw $this->createNotFoundException('Circuit non trouvé');
        }
    
        // Récupère les autres données comme avant
        $commentaires = $this->commentairesRepository->findAll();
        $contact = $this->contactRepository->findOneBy([]);
        $article3 = $this->articleRepository->find(3);
    
        return $this->render('circuit/detail.html.twig', [
            'circuit' => $circuit,
            'commentaires' => $commentaires,
            'contact' => $contact,
            'article3' => $article3,
        ]);
    }
    
    
}
