<?php 

session_start();
include('../helpers/helpers.php');
include('../class/Usuario.php');

require_once '../class/MySQLDB.php';
require_once '../class/JSONDB.php';
require_once '../class/DBFactory.php';

DBFactory::$db_type = 'MySQLDB';




$errors = validateRegister();
// echo"<pre>";var_dump($errors);exit();

if (count($errors)) {
	$_SESSION['errors_register'] = $errors;
	$_SESSION['name'] = $_POST['name']; 
	$_SESSION['surname'] = $_POST['surname'];
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['birth_date'] = $_POST['birth_date'];
	$_SESSION['gender'] = $_POST['gender'];
	header('Location: ../register.php');
	exit();
}

//Avatar
// if ($_FILES['avatar']['error'] == UPLOAD_ERR_OK ) {
// 	//origen
// 	$origin = $_FILES['avatar']['tmp_name'];

// 	//destino
// 	$ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
// 	$imageName = uniqid() . '.' . $ext;
// 	$destiny = __DIR__ . '/../../img/avatars/' . $imageName;

// 	//subir imagen
// 	move_uploaded_file(($origin), $destiny);
// }



// $user = new User($_POST['firstname'], $_POST['surname'], $_POST['username'], $_POST['email'], $_POST['birth_date'], $_POST['gender'], $_POST['password']);

$user = new Usuario($_POST);

// echo"<pre>";var_dump($user);exit();

$user->save();

header('Location: ../log_in.php');

// saveuser();
