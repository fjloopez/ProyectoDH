<?php 

require '../class/User.php';

$user = new User('Bart', 'Simpson', 'ElBarto', 'bart@simpson.com', '1980-12-12', '12345678');

$user->saveUser();

echo '<pre>';

// var_dump($user);