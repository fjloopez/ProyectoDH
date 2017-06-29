<?php 

require '../class/Usuario.php';
// OJO!!!! las validaciones no permiten mayusculas en el username
$user = new Usuario('Bart', 'Simpson', 'elbarto', 'bart@simpson.com', '1980-12-12', '12345678');

$user->saveUser();

echo '<pre>';

var_dump($user);

exit();
