<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    #[Route('/products', name: 'app_products')]
    public function index(): Response
    {
        return $this->render('products/index.html.twig', [
            'controller_name' => 'ProductsController',
        ]);
    }

    #[Route('/Anne_Frank', name: 'app_book_Anne')]
    public function index1(): Response
    {
        return $this->render('products/Book_Anne.html.twig', [
        ]);
    }

    #[Route('/Antigone', name: 'app_book_Antigone')]
    public function index2(): Response
    {
        return $this->render('products/Book_Antigone.html.twig', [
        ]);
    }

    #[Route('/Tatoueur_Auschwitz', name: 'app_book_Tatoueur')]
    public function index3(): Response
    {
        return $this->render('products/Book_Tatoueur.html.twig', [
        ]);
    }
    #[Route('/Bel_Ami', name: 'app_book_bel_ami')]
    public function index4(): Response
    {
        return $this->render('products/Book_Bel_Ami.html.twig', [
        ]);
    }
    #[Route('/Boite_Merveilles', name: 'app_book_boite_merveilles')]
    public function index5(): Response
    {
        return $this->render('products/Book_Boite_Merveilles.html.twig', [
        ]);
    }

    #[Route('/Dernier_Jour_d1Condamne', name: 'app_book_dernier_jour')]
    public function index6(): Response
    {
        return $this->render('products/Dernier_Jour_d1Condamne.html.twig', [
        ]);
    }

    #[Route('/Ptit_Prince', name: 'app_book_petit_prince')]
    public function index7(): Response
    {
        return $this->render('products/Book_Ptit_Prince', [
        ]);
    }
    #[Route('/Rouge&Noir', name: 'app_book_rouge&noir')]
    public function index8(): Response
    {
        return $this->render('products/Book_Rouge&Noir.html.twig', [
        ]);
    }
    #[Route('/Titeuf', name: 'app_book_titeuf')]
    public function index9(): Response
    {
        return $this->render('products/Book_Titeuf.html.twig', [
        ]);
    }
    #[Route('/La_Peste', name: 'app_book_la_peste')]
    public function index10(): Response
    {
        return $this->render('products/Book_La_Peste.html.twig', [
        ]);
    }
    #[Route('/Miserables', name: 'app_book_miserables')]
    public function index11(): Response
    {
        return $this->render('products/Book_Miserables.html.twig', [
        ]);
    }
    #[Route('/3Mousquetaires', name: 'app_book_3mousquetaires')]
    public function index12(): Response
    {
        return $this->render('products/Book_3Mousquetaires.html.twig', [
        ]);
    }


}
