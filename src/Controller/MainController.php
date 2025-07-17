<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function pageaccueil()
    {
        $nombreProduits = 23 ;
        // This method will handle the logic for the accueil page
        // For now, we can just return a simple message or view
        // return new Response('<h1>Welcome to the Accueil Page</h1><p>This is the main page of our application.</p>');
        return $this->render('main/accueil.html.twig',['nombreProduits' => $nombreProduits ]);
    }
}
