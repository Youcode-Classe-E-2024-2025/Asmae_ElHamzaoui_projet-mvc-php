<?php
namespace App\Core;

use PDO;

class Database
{
    private $pdo;

    public function __construct()
    {
        $dsn = 'pgsql:host=localhost;dbname=article';
        $username = '';
        $password = '';
        
        try {
            $this->pdo = new PDO($dsn, $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\Exception $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }

    public function getPDO()
    {
        return $this->pdo;
    }
}
