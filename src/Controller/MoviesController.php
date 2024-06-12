<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'app_movies')]
    public function index(): Response
    {
        $movies = ["Avengers", "Inception", "Loki", "Iron Man"];
        return $this->render('index.html.twig',array ('movies' => $movies));
    }

    #[Route('/movies/{name}', name: 'movies', defaults:['name' => null], methods:['GET', 'HEAD'])]
    public function getMovie($name): JsonResponse
    {

        return $this->json([
            'message' => $name,
            'path' => 'src/Controller/MoviesController.php',
        ]);
    }
}
