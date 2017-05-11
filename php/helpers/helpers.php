<?php

	/*=========================
		validaciones
	=========================*/	
	function validateRegister () {

		$errors_register = [];

		/*=========================
			validar nombre
		=========================*/
		$nombre = trim($_POST['firstname']);
		if ($nombre == "") {
			$errors_register[] = "Te faltó ingresar tu nombre";
		}

		
		/*=========================
			validar apellido
		=========================*/
		$nombre = trim($_POST['surname']);
		if ($nombre == "") {
			$errors_register[] = "Te faltó ingresar tu apellido";
		}

		
		/*=========================
			validar email
		=========================*/
		$email = trim($_POST['email']);
		if ($email == "") {
			$errors_register[] = "Te faltó ingresar tu email";
		} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errors_register[] = "El email ingresado no es válido";
		}


		/*=========================
			validar pass
		=========================*/
		if ($_POST['password'] != $_POST['checkpassword']) {
			$errors_register[] = "Las contraseñas no coinciden";
		}



		/*=========================
			validar fecha de nacimiento
		=========================*/		
		$birth_date = trim($_POST['birth_date']);
		if ($birth_date == "") {
			$errors_register[] = "Te faltó ingresar tu fecha de nacimiento";
		}
		$birth_date = explode('-', $birth_date);
		// toma los valores del array correspondientes al año
		$year = $birth_date[0];
		// toma los valores del array correspondientes al mes
		$month = $birth_date[1];
		// toma los valores del array correspondientes al dia
		$day = $birth_date[2];
		
		if (!checkdate($month, $day, $year)){
			$errors_register[] = "La fecha de nacimiento ingresada no es válida";
		}


		/*=========================7
			validar genero
		=========================*/	




		//devuelvo los errores
		return $errors_register;

	}


	function validateLogIn(){
		$errors_log_in = [];

	}


	function getUsers (){
		$users = @file_get_contents('../../users.json');
		if (!$users) {
				$users = [];
			} else {
				$users = json_decode($users, true);
			}
		return $users;
	}

	function saveUser(){
		//users es un array de arrays usuarios
		$users = getUsers();
		
		//newUser es un array del tipo usuario
		$newUser = [
			'name' => $_POST['firstname'],
			'email' => $_POST['email'],
			// 'birth_date' => $_POST['edad'],
			'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
			// 'path' => $path				//QUISAWEA?
		];

		//guardo newUser dentro del array de usuarios
		$users[] = $newUser;

		//lo codifico a json
		$users = json_encode($users);

		//guardarlo en el archivo json
		file_put_contents('../../users.json', $users);
	}


	function logUser (){
		$users = getUsers();

	}

