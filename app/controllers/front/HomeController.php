<?php

namespace App\Controllers\Front;

use App\Core\Controller;
use App\Models\Article;

class HomeController extends Controller
{
    // Méthode pour afficher la page d'accueil
    public function index()
    {
        // Récupérer tous les articles
        $articleModel = new Article();
        $articles = $articleModel->getAllArticles();

        // Passer les articles à la vue
        $this->render('front.home', ['articles' => $articles]);
    }
}
