<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

require __DIR__ . '/vendor/autoload.php';

use App\Controller\ProductController;

const MY_LITTLE_MVC_DIR = '/my-little-mvc';

$router = new AltoRouter();
$router->setBasePath(MY_LITTLE_MVC_DIR);

include __DIR__ . '/src/Route/home-route.php';
include __DIR__ . '/src/Route/shop-route.php';
include __DIR__ . '/src/Route/register-route.php';
include __DIR__ . '/src/Route/login-route.php';
include __DIR__ . '/src/Route/profile-route.php';
include __DIR__ . '/src/Route/logout-route.php';




$match = $router->match();

if(is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // TODO: Create a 404 view / page to handle this
    // no route was matched

    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}