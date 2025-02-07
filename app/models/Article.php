<?php

namespace App\Models;

use App\Core\Model;
use PDO;

class Article extends Model
{
    // Attributs de l'article
    public $id;
    public $title;
    public $description;
    public $created_at;

    // Méthode pour ajouter un article
    public function createArticle($title, $description)
    {
        $sql = "INSERT INTO articles (title, description, created_at) VALUES (:title, :description, NOW())";

        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':title', $title);
        $stmt->bindValue(':description', $description);

        return $stmt->execute();
    }

    // Méthode pour récupérer tous les articles
    public function getAllArticles()
    {
        $sql = "SELECT * FROM articles ORDER BY created_at DESC";

        $stmt = $this->db->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Méthode pour récupérer un article par son ID
    public function getArticleById($id)
    {
        $sql = "SELECT * FROM articles WHERE id = :id";

        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Méthode pour modifier un article
    public function updateArticle($id, $title, $description)
    {
        $sql = "UPDATE articles SET title = :title, description = :description WHERE id = :id";

        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':title', $title);
        $stmt->bindValue(':description', $description);

        return $stmt->execute();
    }

    // Méthode pour supprimer un article
    public function deleteArticle($id)
    {
        $sql = "DELETE FROM articles WHERE id = :id";

        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);

        return $stmt->execute();
    }
}
