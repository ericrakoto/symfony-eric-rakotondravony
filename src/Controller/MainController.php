<?php
// src/Controller/MainController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\ArticleRepository; //ajouté
use App\Repository\AuteurRepository; //ajouté
use App\Entity\Article;
use App\Entity\Auteur;


/**
 * @Route("/")
 */
class MainController extends AbstractController
{
	/**
     * @Route("/")
     */
    public function index(ArticleRepository $articleRepository): Response
    {
        $number = random_int(0, 100);
        return $this->render('main/main.html.twig', [
            'number' => $number,
            'articles' => $articleRepository->findByDernier()
        ]);
    }

	/**
     * @Route("/info")
     */
	public function getInfo()
	{
	    return $this->json(['user' => 'maxi']);
	}
}