<?php

namespace App\Controller;
use App\Form\ArticleType;
use App\Entity\Article;
use App\Entity\Categorie;
use App\Entity\PropertySearch;
use App\Form\CategoryType;


use App\Form\PropertySearchType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\CategorySearch;
use App\Form\CategorySearchType;


class IndexController extends AbstractController
{
    /**
     *@Route("/c",name="article_list")
     */
    public function home(Request $request)
    {
        //récupérer tous les articles de la table article de la BD
        // et les mettre dans le tableau $articles

        $propertySearch = new PropertySearch();
        $form = $this->createForm(PropertySearchType::class,$propertySearch);
        $form->handleRequest($request);
        //initialement le tableau des articles est vide,
        //c.a.d on affiche les articles que lorsque l'utilisateur
        //clique sur le bouton rechercher
        $articles= [];

        if($form->isSubmitted() && $form->isValid()) {
            //on récupère le nom d'article tapé dans le formulaire

            $Nom = $propertySearch->getNom();
            if ($Nom!="")
                //si on a fourni un nom d'article on affiche tous les articles ayant ce nom
                $articles= $this->getDoctrine()->getRepository(Article::class)->findBy(['Nom' => $Nom] );
            else
                //si si aucun nom n'est fourni on affiche tous les articles



                $articles= $this->getDoctrine()->getRepository(Article::class)->findAll();}
        return $this->render('articles/index.html.twig',['form'=> $form->createView(),'articles'=>$articles]);}

    /**
     * @Route("/article/save")
     */
    public function save() {
        $entityManager = $this->getDoctrine()->getManager();
        $article = new Article();
        $article->setNom('Article 1');
        $article->setPrix(1000);

        $entityManager->persist($article);
        $entityManager->flush();
        return new Response('Article enregisté avec id '.$article->getId());
    }
    /**
     * @Route("/article/new", name="new_article")
     * Method({"GET", "POST"})
     */
    public function new(Request $request) {
        $article = new Article();
        $form = $this->createForm(ArticleType::class,$article);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $article = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($article);
            $entityManager->flush();
            return $this->redirectToRoute('article_list');
        }
        return $this->render('articles/new.html.twig',['form' => $form->createView()]);
    }


    /**
     * @Route("/article/{id}", name="article_show")
     */
    public function show($id) {
        $article = $this->getDoctrine()->getRepository(Article::class)
            ->find($id);
        return $this->render('articles/show.html.twig',
            array('article' => $article));
    }

    /**
     * @Route("/article/edit/{id}", name="edit_article")
     * Method({"GET", "POST"})
     */
    public function edit(Request $request, $id) {
        $article = new Article();
        $article = $this->getDoctrine()->getRepository(Article::class)->find($id);

        $form = $this->createForm(ArticleType::class,$article);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

            return $this->redirectToRoute('article_list');
        }

        return $this->render('articles/edit.html.twig', ['form' =>
            $form->createView()]);
    }

    /**
     * @Route("/article/delete/{id}",name="delete_article")
     * @Method({"DELETE"})


    }*/
    public function delete(Request $request, $id)
    {
        $article = $this->getDoctrine()->getRepository(Article::class) ->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($article);
        $entityManager->flush();

        $response = new Response();
        $response->send();
        return $this->redirectToRoute('article_list');
    }
    /**
     * @Route("/category/newCat", name="new_category")
     * Method({"GET", "POST"})
     */
    public function newCategory(Request $request) {
        $Categorie = new Categorie();
        $form = $this->createForm(CategoryType::class,$Categorie);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $article = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Categorie);
            $entityManager->flush();
        }
        return $this->render('articles/newCategory.html.twig',['form'=>
            $form->createView()]);
    }

    /**
     * @Route("/cat/", name="article_par_cat")
     * Method({"GET", "POST"})
     */
    public function articlesParCategorie(Request $request): Response
    {
        $CategorySearch = new CategorySearch();
        $form = $this->createForm(CategorySearchType::class,$CategorySearch);
        $form->handleRequest($request);
        $articles= [];
        if($form->isSubmitted() && $form->isValid()) {
            $Categorie = $CategorySearch->getCategorie();

            if ($Categorie!="")
                $articles= $Categorie->getArticles();
            else
                $articles= $this->getDoctrine()->getRepository(Article::class)->findAll();
        }

        return $this->render('articles/articlesParCategorie.html.twig',['form' => $form->createView(),'articles' => $articles]);
    }


}