<?php

namespace App\Controller;

use App\Model\Produit;
use App\Repository\ProduitRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitControleur extends AbstractController
{
    #[Route('/api/produits')]
    public function getListe(ProduitRepository $repository): Response {
        // This method will handle the logic for retrieving the list of products
        // For now, we can just return a simple message or view
        // return new Response('<h1>Liste des produits</h1><p>Here is the list of products.</p>');

        /*$produits = [
            ['id' => 1, 'nom' => 'Stylo feutre noir', 'prix' => 2.00],
            ['id' => 2, 'nom' => 'Trousse SIO', 'prix' => 4.00],
            ['id' => 3, 'nom' => 'Cahier SLAM', 'prix' => 2.00],
        ];*/
        // dd($monLog);

        // dd($repository) ;

        // $monLog->info('Liste des produits demandée');
        $produits = $repository->findAll() ;
        return $this->json($produits);
    }

    #[Route('/api/produits/{id<\d+>}', methods: ['GET'])]
    public function get(int $id, ProduitRepository $repository): Response {
        $produit = $repository->find($id);
        if (!$produit){
            throw $this->createNotFoundException('produit non trouvé');
        }
        return $this->json($produit);
    }

}