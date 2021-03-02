<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{

    /**
     * @Route("/", name="accueil", methods={"GET"})
     * @param ProduitRepository $produitRepository
     * @return Response
     */
    public function index(ProduitRepository $produitRepository): Response
    {

        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'produits' => $produitRepository->findAllRecentProduct(),
        ]);
    }
}
