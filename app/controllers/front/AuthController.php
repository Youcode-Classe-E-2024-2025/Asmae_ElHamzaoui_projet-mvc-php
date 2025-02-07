<?php

namespace App\Controllers\Front;

use App\Core\Controller;

class AuthController extends Controller
{
    // Redirige vers la page de connexion
    public function login()
    {
        // Affiche la page de login
        $this->view->render('front/login'); // Assurez-vous que la vue login.twig existe dans app/views/front/
    }

    // Redirige vers la page d'inscription
    public function signUp()
    {
        // Affiche la page d'inscription
        $this->view->render('front/signUp'); // Assurez-vous que la vue signUp.twig existe dans app/views/front/
    }
}
