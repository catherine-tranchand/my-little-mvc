<?php

namespace App\Controller;
use AllowDynamicProperties;
use App\Model\Product;

#[AllowDynamicProperties] class ProductController
{
    public function __construct(){
        $this->productModel = new Product();
    }

    public function getAllProducts(){
        return $this->productModel->findAll();
    }

    public function showPage(){
        $owner = 'Axel';
        $products = $this->getAllProducts();
        require_once __DIR__ . '/../View/shop.php';
    }
}