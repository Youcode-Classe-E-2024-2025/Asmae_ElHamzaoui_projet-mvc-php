<?php

namespace App\Controllers\Front;

use App\Core\Controller;
use App\Models\User; // Assurez-vous d'importer le modèle User

class AuthController extends Controller
{
    // Affiche la page de login
    public function login()
    {
        $this->view->render('front/login');
    }

    // Affiche la page d'inscription
    public function signUp()
    {
        $this->view->render('front/signUp');
    }

    // Traite le formulaire d'inscription
    public function processSignUp()
    {
        // Récupérer les données du formulaire
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_confirmation = $_POST['password_confirmation'];

        // Validation basique (tu peux ajouter plus de vérifications selon tes besoins)
        if ($password !== $password_confirmation) {
            // Si les mots de passe ne correspondent pas
            $_SESSION['error'] = 'Les mots de passe ne correspondent pas.';
            header('Location: /sign-up');
            exit();
        }

        // Vérifier si l'email existe déjà
        $userModel = new User(); // Instancier le modèle User
        if ($userModel->emailExists($email)) {
            $_SESSION['error'] = 'L\'email est déjà utilisé.';
            header('Location: /sign-up');
            exit();
        }

        // Ajouter l'utilisateur dans la base de données
        $userModel->addUser($name, $email, $password);

        // Rediriger vers la page de connexion après l'inscription
        $_SESSION['success'] = 'Inscription réussie. Vous pouvez maintenant vous connecter.';
        header('Location: /article'); // Rediriger vers la page de login après inscription
        exit();
    }

    // Traite le formulaire de connexion
    public function processLogin()
    {
        // Vérifier si les informations de connexion ont été envoyées via POST
        if (isset($_POST['email'], $_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            // Créer une instance du modèle User
            $userModel = new User();
    
            // Vérifier si l'email existe dans la base de données
            $user = $userModel->getUserByEmail($email);
    
            // Si l'utilisateur existe et que le mot de passe est correct
            if ($user && password_verify($password, $user->password)) {
                // Démarrer une session et enregistrer l'ID de l'utilisateur dans la session
                session_start();
                $_SESSION['user_id'] = $user->id;
                $_SESSION['user_name'] = $user->name;
                $_SESSION['user_email'] = $user->email;
                $_SESSION['user_role'] = $user->role;  // Ajouter le rôle de l'utilisateur à la session
    
                // Vérifier le rôle de l'utilisateur et rediriger en conséquence
                if ($user->role === 'admin') {
                    // Rediriger vers la page du dashboard si l'utilisateur est un admin
                    header('Location: /dashboard');
                } else {
                    // Rediriger vers la page des articles si l'utilisateur est un client
                    header('Location: /article');
                }
                exit();
            } else {
                // Si l'email ou le mot de passe est incorrect
                $_SESSION['error'] = 'Email ou mot de passe incorrect';
                header('Location: /login');
                exit();
            }
        }
    }
    
    


    // Déconnexion
    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: /login');
        exit();
    }
}

