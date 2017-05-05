<?php 
	
session_start();
include('../helpers/helpers.php');

$errors = validarRegistro();
//hacer un array asociativo donde guarde los valores que debe poner en los values y pasarlos a register
// los valores los va a tratar en helpers como hace con errors
//si hay errores corto la ejecucion y los devuelvo
if (count($errors)) {
	$_SESSION['errors'] = $errors;
	$_SESSION['name'] = $_POST['firstname']; 
	$_SESSION['surname'] = $_POST['surname'];
	$_SESSION['email'] = $_POST['email'];
	header('Location: ../register.php');
	exit();
}

saveuser();

header('Location: ../succesful_register.php');
exit;

?>

