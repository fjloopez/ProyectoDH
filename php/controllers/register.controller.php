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

/*==============================================
cambiar por ../register_completed.php
================================================*/
header('Location: ../register.php');
exit;


/*==============================================
agregar la parte de JSON
================================================*/
?>

