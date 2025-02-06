<?php

namespace App\Controllers\Front;

use App\Core\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    public function show($id)
    {
        // Récupérer un article par ID
        $article = new Article();
        $data = $article->find($id);

        // Afficher la vue correspondante
        $this->view('front/article', ['article' => $data]);
    }
}
?>
