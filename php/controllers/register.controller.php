<?php 

session_start();
include('../helpers/helpers.php');



$errors = validateRegister();

if (count($errors)) {
	$_SESSION['errors_register'] = $errors;
	$_SESSION['name'] = $_POST['firstname']; 
	$_SESSION['surname'] = $_POST['surname'];
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['birth_date'] = $_POST['birth_date'];
	$_SESSION['gender'] = $_POST['gender'];
	header('Location: ../register.php');
	exit();
}

//Avatar
if ($_FILES['avatar']['error'] == UPLOAD_ERR_OK ) {
	//origen
	$origin = $_FILES['avatar']['tmp_name'];

	//destino
	$ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
	$imageName = uniqid() . '.' . $ext;
	$destiny = __DIR__ . '/../../img/avatars/' . $imageName;

	//subir imagen
	move_uploaded_file(($origin), $destiny);
}


saveuser();
header('Location: ../log_in.php');
exit;
