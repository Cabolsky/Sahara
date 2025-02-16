<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use App\Entity\Circuits;
use App\Entity\Commentaires;
use App\Entity\Contact;
use App\Entity\Excursions;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

#[Route('/admin', name: 'admin')]
#[IsGranted('ROLE_ADMIN')]
class AdminDashboardController extends AbstractDashboardController
{
    public function __construct(private AdminUrlGenerator $adminUrlGenerator) {}

    public function index(): Response
    {
        $url = $this->adminUrlGenerator
            ->setController(ArticleCrudController::class) 
            ->generateUrl();

        return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Administration');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Tableau de bord', 'fa fa-home');
        yield MenuItem::linkToCrud('Commentaires', 'fa fa-comment', Commentaires::class);
        yield MenuItem::linkToCrud('Articles', 'fa fa-newspaper', Article::class);
        yield MenuItem::linkToCrud('Circuits', 'fa fa-car', Circuits::class);
        yield MenuItem::linkToCrud('Excursions', 'fa fa-globe', Excursions::class);
        yield MenuItem::linkToCrud('Contacts', 'fa fa-envelope', Contact::class);

        yield MenuItem::linkToLogout('Déconnexion', 'fa fa-sign-out');
    }
}
