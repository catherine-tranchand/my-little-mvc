<?php

namespace App\Route;
use App\Controller\AuthenticationController;

$router->map('GET', '/register', function (){
    $registerController = new AuthenticationController();
    $registerController->showPage();
});
$router->map('POST', '/register', function() {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $registerController = new AuthenticationController();
    $response = $registerController->register($fullname, $email, $password);


}, 'register');