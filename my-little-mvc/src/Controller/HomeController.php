<?php

namespace App\Controller;

class HomeController
{

    public function showPage(){
        require __DIR__ . '/../View/home.php';
    }
}