<?php

namespace App\Route;
use App\Controller\ProfileController;

$router->map('GET', '/profile', function (){
    $profileController = new ProfileController();
    $profileController->showPage();
});

$router->map('POST', '/profile', function(){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $profileController = new ProfileController();
    $profileController->updateProfil($fullname, $email, $password);
    header('Location: /my-little-mvc/profile');
});