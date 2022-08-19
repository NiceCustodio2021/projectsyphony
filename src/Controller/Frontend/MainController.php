<?php

namespace App\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Classe Main Controller pour Page d'Accueil
 */
class MainController extends AbstractController
{
    /**
     * Affiche la Page d'Accueil
     *
     * @Route("/", name="home")
     * @return Response
     */
    public function index(): Response
    {
        $data = [
            'nom' => 'Pierre',
            'age' => 25,
            'ville' => 'Chambéry'
        ];

        return $this->render('Home/index.html.twig', ['data' => $data]);
    }
}
