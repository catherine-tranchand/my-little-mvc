<?php

namespace App\Controller;

use App\Model\User;

class ProfileController
{
    public object $user;

    public function __construct(){
        session_start();
        $this->user = new User();
    }

    public function showPage(){
        if(User::isLoggedIn()){
            $userId = $_SESSION['user']['id'];
            $userFromDatabase = $this->user->findOneById($userId);
            require __DIR__ . '/../View/profile.php';
        } else {
            header('Location: /my-little-mvc/login');
            exit();
        }
    }

    public function profile(){
       if(User::isLoggedIn()){
           $user = $_SESSION['user'];
           return $user;
       }else{
           header('Location: /my-little-mvc/login');
           exit();
       }
    }

    public function updateProfil(string $fullname, string $email, string $password){
        if(User::isLoggedIn()){
            $success = $this->user->update($fullname, $email, $password);
            if($success){
                $user = $this->user->findOneById($_SESSION['user']['id']);
                return ['success', $success, $user];

            }else{
                return ['success', $success, null];
            }
        }else{
            header('Location: /my-little-mvc/login');
            exit();

        }
    }

}
