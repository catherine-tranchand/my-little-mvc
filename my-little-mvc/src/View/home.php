<?php
require_once "src/Template/__header.html";
session_start();

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
    <link rel="stylesheet" href="src/assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.2/zephyr/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.2/zephyr/bootstrap.rtl.min.css">
</head>
<body>
<div class="d-flex justify-content-center mt-4">
    <h2>Bienvenue !</h2>
</div>
<section class="container d-flex justify-content-center align-items-center">
    <p>Connectez-vous à notre boutique en ligne pour voir nos produits</p>
</section>
<section class="container d-flex justify-content-center align-items-center">
    <a href="shop" class="btn btn-primary">Le catalogue</a>

</section>
</body>
</html>
