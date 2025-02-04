<?php

namespace App\Core;

use PDO;

class Database
{
    private $pdo;

    public function __construct()
    {
        $dsn = 'pgsql:host=127.0.0.1;dbname=article';
        $username = 'postgres';
        $password = '1234';

        // On utilise un bloc try-catch pour gérer la connexion
        try {
            // Tente de se connecter à la base de données
            $this->pdo = new PDO($dsn, $username, $password);
            // On définit le mode d'erreur de PDO pour afficher les erreurs détaillées
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Si la connexion réussit, on affiche ce message
            echo "Connexion réussie à la base de données !";
        } catch (\Exception $e) {
            // Si une erreur survient, on l'affiche avec un message d'erreur
            echo "Erreur de connexion à la base de données : " . $e->getMessage();
        }
    }

    public function getPDO()
    {
        return $this->pdo;
    }
}


?>