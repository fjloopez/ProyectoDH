<?php 

session_start();
include('../helpers/helpers.php');

if (validUsername()){
	$user = getUserByUsername($_POST['username']);
	if (!$user){
		$_SESSION['errors_forget_password'] = 'Usuario incorrecto';	
		header('Location: ../forget_password.php');
		exit();	
	} else {
		$to = $user['email'];
		$subject = 'Cambio de contraseña';
		$newPassword = generateRandomPassword();
		$message = 'Su nueva contraseña es: ' . $newPassword;
		mail($to, $subject, $message);
		changePassword($user['username'],$newPassword);
		header('Location: ../main.php');
		exit();
	}
}


