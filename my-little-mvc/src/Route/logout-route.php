<?php


use App\Controller\AuthenticationController;

$router->map('GET', '/logout', function (){
    $authenticationController = new AuthenticationController();
    $authenticationController->logout();
    echo "no";
    require_once __DIR__ . "/logout-route.php";
});