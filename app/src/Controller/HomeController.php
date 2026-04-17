<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request): Response
    {

        return $this->render('index.html.twig');
    }
    #[Route('/chart', name: 'app_chart')]
    public function chart(): Response
    {

        return $this->render('chart.html.twig');
    }
}
