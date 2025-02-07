<?php

namespace App\Controllers\Front;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Gestion des Articles',
            'welcomeMessage' => 'Bienvenue sur la plateforme de gestion des articles',
        ];

        $this->render('front.home', $data); // Affiche la vue home.twig
    }
}
