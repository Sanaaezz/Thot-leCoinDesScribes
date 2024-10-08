<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Utilisateur;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use App\Repository\GenreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;


#[Route('/article')]
final class ArticleController extends AbstractController
{
    #[Route(name: 'app_article_index', methods: ['GET'])]
    public function index(ArticleRepository $articleRepository, GenreRepository $genreRepo, CategorieRepository $categorieRepo): Response
    {
        return $this->render('article/index.html.twig', [
            'articles' => $articleRepository->findAll(),
            'genres' => $genreRepo->findAll(),
            'categories' => $categorieRepo ->findAll(),
        ]);
    }


    #[Route('/new', name: 'app_article_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $article = new Article();
        // dd($article);
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // pour forcer le statut a faux pour qu il ne soit pas connu null dans la base de donnée
            // $article->setStatutArticle(false);
            if (!$this->isGranted('ROLE_ADMIN')) {
                $article->setStatutArticle(false);
            }  

            $utilisateur = $this->getUser();
            $article->setUtilisateur($utilisateur);
            $entityManager->persist($article);
            $entityManager->flush();

            $this->addFlash('success', 'Votre texte a bien été envoyé, aprés vérification, il sera bientot visible ');
            return $this->redirectToRoute('app_auteur', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('article/new.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }

    // #[IsGranted('ROLE_ADMIN', statusCode: 423, message: "Vous n'avez pas les droits pour accéder à cette page")]
    #[Route('/{id}', name: 'app_article_show', methods: ['GET'])]
    public function show(Article $article): Response
    {
        return $this->render('article/show.html.twig', [
            'article' => $article,
        ]);
    }

    #[IsGranted('ROLE_ADMIN', statusCode: 423, message: "Vous n'avez pas les droits pour accéder à cette page")]
    #[Route('/{id}/validation', name: 'app_article_validation', methods: ['GET', 'POST'])]
    public function showadmin(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_admin', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('article/validation.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_article_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('article/edit.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_article_delete', methods: ['POST'])]
    public function delete(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $article->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($article);
            $entityManager->flush();
        }
        
        if($this->isGranted('ROLE_ADMIN')){
            return $this->redirectToRoute('app_admin', [], Response::HTTP_SEE_OTHER);
        }elseif($this->isGranted('ROLE_USER')){
            return $this->redirectToRoute('app_auteur', [], Response::HTTP_SEE_OTHER);
        }

    }

}
