<?php 
session_start();

if (isset($_POST['accept'])){
	session_destroy();	
	header('Location: ../main.php');
	exit;
}

if (isset($_POST['cancel'])){
	header('Location: ../main.php');
	exit;
}



