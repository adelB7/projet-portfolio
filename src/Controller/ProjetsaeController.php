<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetsaeController extends AbstractController
{
    #[Route('/', name: 'app_projetsae')]
    public function index(): Response
    {
        return $this->render('projetsae/index.html.twig', [
            'controller_name' => 'ProjetsaeController',
        ]);
    }
    #[Route('/portfolio', name: 'app_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('projetsae/portfolio.html.twig', [
            'controller_name' => 'ProjetsaeController',
        ]);
    }
    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('projetsae/cv.html.twig', [
            'controller_name' => 'ProjetsaeController',
        ]);
    }

}
