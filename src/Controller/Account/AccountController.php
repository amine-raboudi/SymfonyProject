<?php

namespace App\Controller\Account;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;




class AccountController extends AbstractController
{
    /**
     * @Route("/account", name="account")
     * @param $ArticleRepository
     * @return Response
     */
    public function index(ArticleRepository $ArticleRepository): Response
    {
        return $this->render('account/index.html.twig', [
            'article' => $ArticleRepository->findAll(),
        ]);
    }


}
