<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController
{
    #[Route('/')]
    public function pageaccueil()
    {
        // This method will handle the logic for the accueil page
        // For now, we can just return a simple message or view
        return new Response('<h1>Welcome to the Accueil Page</h1><p>This is the main page of our application.</p>');
    }
}
