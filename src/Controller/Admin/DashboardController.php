<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use App\Entity\Categorie;
use App\Entity\User;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use App\Repository\UserRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    protected $articleRepository;
    protected $userRepository;
    protected $categorieRepository;


    public function __construct( ArticleRepository $articleRepository, UserRepository $userRepository, CategorieRepository $categorieRepository )
    {
        $this->articleRepository = $articleRepository;
        $this->userRepository = $userRepository;
        $this->categorieRepository=$categorieRepository;
    }

    /**
     * @Route("/admin", name="admin")
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function index(): Response
    {
        return $this->render('bundles/EasyAdminBundle/welcome.html.twig', [
            'AllUsers' => $this->userRepository->findAll() ,
            'countAllUser' => $this->userRepository->countAllUsers(),
            'AllArticles' => $this->articleRepository->findAll() ,
            'countAllArticle' => $this->articleRepository->countAllArticles(),
        'AllCategories' => $this->categorieRepository->findAll() ,
            'countAllCategory' => $this->categorieRepository->countAllCategories()
        ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Ecommerce');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Users','fas fa-user-alt',User::class);
        yield MenuItem::linkToCrud('Category','fas fa-box',Categorie::class);
        yield MenuItem::linkToCrud('Article','fas fa-file-alt',Article::class);

    }
}
