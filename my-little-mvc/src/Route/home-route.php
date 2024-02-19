<?php

namespace App\Route;

use App\Controller\HomeController;

$router->map('GET', '/', function (){
    $homeController = new HomeController();
    $homeController->showPage();

});
