<?php

require_once "src/Template/__header.html";
if(!\App\Model\User::isLoggedIn()){
    header('location: login');
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="src/assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.2/zephyr/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.2/zephyr/bootstrap.rtl.min.css">
    <title>Profil</title>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center mt-4">
    <h1>Page de profil</h1>
</div>

<div class="container d-flex justify-content-center align-items-center">

    <form method="post" action="/my-little-mvc/profile">

        <div class="form-group">
            <label for="fullname"  class="form-label mt-4">Nom complet : </label>
            <input type="text" name="fullname" class="form-control" value="<?= $userFromDatabase->getFullname() ?>">

        </div>

        <div class="form-group">
            <label for="email"  class="form-label mt-4">Email :</label>
            <input type="email" name="email" class="form-control" value="<?= $userFromDatabase->getEmail() ?>">

        </div>

        <div class="form-group">
            <label for="password"  class="form-label mt-4"> Mot de passe :</label>
            <input type="password" name="password" class="form-control" value="">

        </div>

        <button type="submit" class="btn btn-primary mt-4">Modifier mes informations</button>
    </form>

</div>

</body>
</html>
