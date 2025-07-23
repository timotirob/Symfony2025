<?php
namespace App\Repository;

use App\Model\Produit;
use Psr\Log\LoggerInterface;

class ProduitRepository
{
    public function __construct(private LoggerInterface $monLog)
    {
        // This constructor can be used to initialize any dependencies if needed
    }

    public function findAll(): array
    {
        $this->monLog->info('Liste des produits demandée') ;        // This method should return an array of products
        // For now, we can return a static array of products
        /*return [
            ['id' => 1, 'nom' => 'Stylo feutre noir', 'prix' => 2.00],
            ['id' => 2, 'nom' => 'Trousse SIO', 'prix' => 4.00],
            ['id' => 3, 'nom' => 'Cahier SLAM', 'prix' => 2.00],
        ];*/
        return [
            new Produit(1, 'Stylo feutre noir', 2.00),
            new Produit(2, 'Trousse SIO', 4.00),
            new Produit(3, 'Cahier SLAM', 2.00),
        ];
    }

    public function find(int $id): ?Produit
    {
        // This method should return a single product by its ID
        // For now, we can return a static product or null if not found
        $produits = $this->findAll();
        foreach ($produits as $produit) {
            if ($produit->getId() === $id) {
                //dd($produit);
                return $produit;
            }
        }
        return null; // Return null if the product is not found
    }

}