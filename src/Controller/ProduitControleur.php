<?php

namespace App\Controller;

use App\Model\Produit;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitControleur extends AbstractController
{
    #[Route('/produits/{id<\d+>}',name: 'app_produit_show')]
    public function show(int $id, ProduitRepository $repo): Response
    {

        $produit = $repo->find($id);

        if (!$produit) {
            throw $this->createNotFoundException('Le produit n\'existe pas');
        }
        return $this->render('produit/show.html.twig', ['produit' => $produit]);
    }


}
