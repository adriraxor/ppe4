<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EspaceAdminController extends AbstractController
{
    /**
     * @Route("/admin", name="espace_admin")
     */
    public function index(): Response
    {
        return $this->render('espace_admin/index.html.twig', [
            'controller_name' => 'EspaceAdminController',
        ]);
    }

    /**
     * @Route("/gestionprd", name="gestion_produits")
     * @param ProduitRepository $repository
     * @return Response
     */
    public function gestion_produits(ProduitRepository $repository){
        return $this->render('espace_admin/gestionprd.html.twig', [
            'controller_name' => 'EspaceAdminController',
            'produits' => $repository->findAllProducts(),
        ]);
    }


}
