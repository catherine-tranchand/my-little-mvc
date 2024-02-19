<?php

namespace App\Controller;

use App\Model\User;

class AuthenticationController{

    public object $user;

    public function __construct(){
        $this->user = new User();
    }

    public function showPage(){
        require __DIR__  . '/../View/register.php';
    }
    public function register(string $fullname, string $email, string $password){
        $success = $this->user->create($fullname, $email, $password);
        header( "Refresh:2; login");

        if ($success) {
            $message = "<div class='alert alert-dismissible alert-success'>
  <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
  <strong>Inscription réussie !</strong> Vous pouvez maintenant vous connecter.</div>";

        } else {
            $message = "<p class='error'>Erreur lors de l'inscription. Veuillez réessayer.</p>";
        }
        echo $message;
        require_once __DIR__ . '/../View/register.php';

    }

    public function logout(){
        session_start();
        session_unset();
        session_destroy();
        header('Location: login');
        exit();
    }


}