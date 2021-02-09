<?php
require './classes/utilisateur.php';
require './classes/admin.php';
// user
$user = new Utilisateur("Deterre");
echo $user->generateCode();

echo "<br><br>";

// admin
$admin = new Admin('Doe');
//echo $admin->generateCode();
//
//$admin->display();
//
//echo $admin->getNom();
//

$admin2 = new Admin('Jane');

echo $admin::getInstancesCount();