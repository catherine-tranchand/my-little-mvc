<?php

namespace App\Route;

use App\Controller\ProductController;
use App\Controller\ShopController;


$router->map('GET', '/shop', function() {
    $page = $_GET['page'] ?? 1;
    $shopController = new ShopController();
    $shopController->index($page);

}, 'home');

$router->map('GET', '/products', function () {
    $productController = new ProductController();
    $productController->showPage();
});


$router->map('GET', '/product/[i:id]', function ($id) {
    $shopController = new ShopController();
    $shopController->showProduct($id);
});

$router->map('GET', '/products/[:productType]', function($productType) {
    $shopController = new ShopController();
    $shopController->showProductByType($productType);
});

