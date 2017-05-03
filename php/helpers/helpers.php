<?php

//validaciones
function validarRegistro () {

	$errors = [];

	//validar nombre
	$nombre = trim($_POST['firstname']);
	if ($nombre == "") {
		$errors[] = "Te faltó ingresar tu nombre";
	}

	//validar apellido
	$nombre = trim($_POST['surname']);
	if ($nombre == "") {
		$errors[] = "Te faltó ingresar tu apellido";
	}

	//validar email
	$email = trim($_POST['email']);
	if ($email == "") {
		$errors[] = "Te faltó ingresar tu email";
	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors[] = "El email ingresado no es válido";
	}

	//validar fecha de nacimiento
	$edad = trim($_POST['birth_date']);
	if (!is_numeric($birth_date)) {
		$errors[] = "La fecha de nacimiento tiene que ser numérica";
	}

	//validar pass
	if ($_POST['password'] != $_POST['checkpassword']) {
		$errors[] = "Las contraseñas no coinciden";
	}

	//devuelvo los errores
	return $errors;

}
?>