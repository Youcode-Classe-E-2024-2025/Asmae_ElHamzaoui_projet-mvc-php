<?php

namespace App\Controllers\Back; 

use App\Core\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Tableau de Bord Admin',
            'welcomeMessage' => 'Bienvenue sur le tableau de bord de l\'administrateur',
        ];

        $this->render('back/dashboard', $data); // Affiche la vue dashboard.twig (par exemple)
    }
}
