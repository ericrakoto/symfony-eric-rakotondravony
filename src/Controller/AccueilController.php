<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\ArticleRepository; //ajouté
use App\Repository\AuteurRepository; //ajouté
use App\Entity\Article;
use App\Entity\Auteur;
use Symfony\Component\HttpFoundation\Request;


class AccueilController extends AbstractController
{
    private $urlGenerator;
    /**
     * @Route("/accueil", name="accueil")
     */
    public function index(ArticleRepository $articleRepository): Response
    {

    //j'utilise un requete de jointure fait dans ArticleRepository
        return $this->render('accueil/index.html.twig', [
           'articles' => $articleRepository->findByDernier()
        ]);
    }

   
}
