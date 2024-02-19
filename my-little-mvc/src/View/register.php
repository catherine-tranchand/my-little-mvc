<?php

use App\Model\User;
require_once "src/Template/__header.html";
$message = isset($_SESSION['message']) ? $_SESSION['message'] : "";
unset($_SESSION['message']);

if(isset($_POST["fullname"], $_POST["email"], $_POST["password"])) {
    $fullname = htmlspecialchars($_POST["fullname"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    $newUser = new User();
    $newUser->create($fullname, $email, $password);
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
    <link rel="stylesheet" href="src/assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.2/zephyr/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.2/zephyr/bootstrap.rtl.min.css">
</head>
<body>

<div class="d-flex justify-content-center mt-4">
    <h2>Inscrivez-vous</h2>
</div>

<div class="container d-flex justify-content-center align-items-center">

    <form method="POST" action="" name="register-form">
        <div class="form-group">
            <label for="fullname" class="form-label mt-4">Nom complet</label>
            <input type="text" name="fullname" class="form-control" placeholder="Jean Dupont">
        </div>

        <div class="form-group">
            <label for="email" class="form-label mt-4">Adresse mail</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="votre@email.com">
            <small id="emailHelp" class="form-text text-muted">Nous ne vendrons vos données à personne.</small>
        </div>


        <div class="form-group">
            <label for="password" class="form-label mt-4">Password</label>
            <input type="password" name="password" class="form-control mb-4" id="exampleInputPassword1" placeholder="Mot de passe" autocomplete="on">
        </div>

        <button type="submit" class="btn btn-primary">Je m'inscris</button>
    </form>

</div>
</body>
</html>
