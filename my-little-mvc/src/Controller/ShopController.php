<?php

namespace App\Controller;

use App\Model\Product;
use App\Model\User;

class ShopController
{
    public object $product;
    public object $user;

    public function __construct()
    {
        $this->product = new Product();
        $this->user = new User();
        session_start();
    }

    public function index($page)
    {
        $productPaginate = $this->product->findPaginated($page);
        require_once __DIR__ . '/../View/shop.php';
    }

    public function showProduct($id)
    {
        if (User::isLoggedIn()) {

            $productById = $this->product->findOneById($id);
            require_once __DIR__ . '/../View/product-show.php';
        } else {
            header('Location: /my-little-mvc/login');
            exit();
        }
    }

    public function  showProductByType($productType)
    {
        $productByType = $this->product->findOneByType($productType);
        require_once __DIR__ . '/../View/product-type-show.php';

    }


}