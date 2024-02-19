<?php

namespace App\Route;

use App\Controller\LoginController;

$router->map('GET', '/login', function (){
    $loginController = new LoginController();
    $loginController->showPage();

});

$router->map('POST', '/login', function (){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $loginController = new LoginController();
    $response = $loginController->connectUser($email, $password);
    echo json_encode($response);
});