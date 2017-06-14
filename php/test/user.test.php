<?php 

require '../class/User.php';
// OJO!!!! las validaciones no permiten mayusculas en el username
$user = new User('Bart', 'Simpson', 'elbarto', 'bart@simpson.com', '1980-12-12', '12345678');

$user->saveUser();

echo '<pre>';

// var_dump($user);