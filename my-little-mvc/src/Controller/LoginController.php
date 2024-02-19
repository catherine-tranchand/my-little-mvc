<?php

namespace App\Controller;

use App\Model\User;

class LoginController
{
    public object $user;

    public function __construct(){
        $this->user = new User();
        session_start();
    }

    public function showPage(){
        require __DIR__ . '/../View/login.php';
    }
    public function connectUser($email, $password){
        $success = $this->user->connection($email, $password);
        return ['success', $success];
    }

}