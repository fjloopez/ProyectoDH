<?php 
	
session_start();
include('../helpers/helpers.php');

$errors = validateLogIn();

if (count($errors)) {
	$_SESSION['errors_log_in'] = $errors;
	$_SESSION['username'] = $_POST['username'];	
	header('Location: ../log_in.php');
	exit();
}

$_SESSION['logUser'] = $_POST['logUser'];
if (isset($_POST['rememberMe'])){
	$_SESSION['rememberMe'] = $_POST['rememberMe'];
	$_SESSION['username'] = $_POST['username'];
}

header('Location: ../main.php');
exit;
