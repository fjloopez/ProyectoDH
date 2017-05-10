<?php 
	
session_start();
include('../helpers/helpers.php');

//$errors = validarRegistro();

$_SESSION['log_in'] = validateLogIn();



//header('Location: ../main.php');
exit;
