<?php 
	
session_start();
include('../helpers/helpers.php');



$errors = validateRegister();

if (count($errors)) {
	$_SESSION['errors_register'] = $errors;
	$_SESSION['name'] = $_POST['firstname']; 
	$_SESSION['surname'] = $_POST['surname'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['birth_date'] = $_POST['birth_date'];
	$_SESSION['gender'] = $_POST['gender'];
	header('Location: ../register.php');
	exit();
}

saveuser();

header('Location: ../log_in.php');
exit;
