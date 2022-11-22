<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BiblioHomeController extends AbstractController
{
    #[Route('/', name: 'app_biblio_home')]
    public function index(): Response
    {
        return $this->render('biblio_home/index.html.twig', [
            'controller_name' => 'BiblioHomeController',
        ]);
    }
}
