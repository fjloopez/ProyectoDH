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

// Cookie (necesita un nombre para la cookie, un valor y el tiempo que expira)

if (isset($_POST['rememberMe'])){
	$cookieName = 'Recordar';
	$cookieValue = $_POST['username'];
	setcookie($cookieName, $cookieValue, time() + (60 * 60 * 24 * 365));
}

header('Location: ../main.php');
exit;
