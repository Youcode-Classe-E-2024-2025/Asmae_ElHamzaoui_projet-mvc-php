<?php

namespace App\Models;

use App\Core\Model;
use PDO;

class User extends Model
{
    // Attributs utilisateur
    public $id;
    public $username;
    public $email;
    public $password;
    public $role;

    // Méthode pour enregistrer un utilisateur
    public function createUser($username, $email, $password)
    {
        $passwordHash = password_hash($password, PASSWORD_BCRYPT); // Hash du mot de passe
        $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':username', $username);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':password', $passwordHash);

        return $stmt->execute();
    }

    // Méthode pour récupérer un utilisateur par son email
    public function getUserByEmail($email)
    {
        $sql = "SELECT * FROM users WHERE email = :email";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Méthode pour vérifier le mot de passe d'un utilisateur
    public function verifyPassword($password, $hashedPassword)
    {
        return password_verify($password, $hashedPassword);
    }
}
