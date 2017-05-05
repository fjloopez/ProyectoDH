<?php 
	
session_start();
include('../helpers/helpers.php');

$errors = validarRegistro();

//si hay errores corto la ejecucion y los devuelvo
if (count($errors)) {
	$_SESSION['errors'] = $errors;
	header('Location: ../register.php');
	exit();
}

saveuser();

header('Location: ../succesful_register.php');
exit;

?>

