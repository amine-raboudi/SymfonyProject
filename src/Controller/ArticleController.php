<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="article")
     */
    public function index(ArticleRepository $ArticleRepository): Response
    {
        return $this->render('article/index.html.twig', [
            'article' => $ArticleRepository->findAll()
        ]);
    }

}
