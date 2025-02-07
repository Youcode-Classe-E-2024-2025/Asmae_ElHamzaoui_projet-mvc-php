<?php

namespace App\Core;

use App\Core\View;

class Controller
{
    // Méthode pour rendre une vue
    public function render(string $view, array $data = [])
    {
        // Vérifie si le fichier de vue existe
        $viewFile = __DIR__ . '/../views/' . $view . '.twig';
        
        if (file_exists($viewFile)) {
            // Initialiser le moteur de template (Twig)
            $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../views');
            $twig = new \Twig\Environment($loader, [
                'cache' => false, // Vous pouvez activer le cache en production
            ]);

            // Rendre la vue avec les données passées
            echo $twig->render($view . '.twig', $data);
        } else {
            // Afficher une erreur si la vue n'est pas trouvée
            echo 'Vue introuvable : ' . $view;
        }
    }

    // Méthode pour rediriger vers une autre page
    public function redirect(string $url)
    {
        header('Location: ' . $url);
        exit();
    }

    // Méthode pour vérifier si un utilisateur est connecté
    public function isAuthenticated()
    {
        return isset($_SESSION['user']);
    }

    // Méthode pour récupérer l'utilisateur connecté
    public function getUser()
    {
        return isset($_SESSION['user']) ? $_SESSION['user'] : null;
    }
}
