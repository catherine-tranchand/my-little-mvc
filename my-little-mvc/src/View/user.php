<?php

use App\Model\User;

require_once "../../vendor/autoload.php";

$user = new User();
$foundUser = $user->findOneById(1);

echo  $foundUser->getId() . "<br>";
echo  $foundUser->getFullname() . "<br>";
echo  $foundUser->getEmail() . "<br>";
$role = $foundUser->getRole();
echo implode($role);

$allUsers = $foundUser->findAll();
foreach ($allUsers as $user){
    echo implode(', ', $user) . "<br>";
}

$userManager = new User();
$userManager->create('axel3', "axe3l@fr.fr", "test");
?>
