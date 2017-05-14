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
		if (ctype_alpha(str_replace(' ', '', $name)) === false) {
			$errors[] = "El nombre sólo puede contener letras y espacios" ;
		}

		
		/*=========================
			validar apellido
		=========================*/
		$apellido = trim($_POST['surname']);
		if ($apellido == "") {
			$errors_register[] = "Te faltó ingresar tu apellido";
		}

		/*=========================
			validar username
		=========================*/
		$usuario = trim($_POST['username']);
		if ($usuario == "") {
			$errors_register[] = "Te faltó ingresar tu nombre de usuario";
		}
		if (getUserByUsername($username) == !false) {
			$errors_register[] = "El nombre de usuario ya está siendo usado";
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


		/*=========================
			validar genero
		=========================*/	
		// if ($gender == "") {
		// 	$errors_register[] = "Te faltó ingresar tu género";
		// }


		//devuelvo los errores
		return $errors_register;

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

	function getUserByUsername($username){
		$users = getUsers();
		foreach ($users as $user) {
			if ($user['username'] == $username) {
				return $user;
			}
		}
		return false;
	}

	function checkPassword($user){
		return true;
		
	}


	function validateLogIn(){
		$errors_log_in = [];
		$user = getUserByUsername($_POST['username']);
		if (!$user){
			$errors_log_in[] = "El nombre de usuario ingresado es incorrecto";
			return $errors_log_in;
		} elseif (!checkPassword($user)){
			$errors_log_in[] = "La contraseña ingresada es incorrecta";
			return $errors_log_in;
		} else{
			$_POST['logUser'] = $user;
			return $errors_log_in;
		}

	}

	function saveUser(){
		//users es un array de arrays usuarios
		$users = getUsers();
		
		//newUser es un array del tipo usuario
		$newUser = [
			'name' => $_POST['firstname'],
			'surname' => $_POST['surname'],
			'email' => $_POST['email'],
			'birth_date' => $_POST['birth_date'],
			'username' => $_POST['username'],
			'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
			// 'path' => $path

			// $_SESSION['user_img'] usar esto para guardar la img del usuario, se usa en menu de esta forma


		];

		//guardo newUser dentro del array de usuarios
		$users[] = $newUser;

		//lo codifico a json
		$users = json_encode($users);

		//guardarlo en el archivo json
		file_put_contents('../../users.json', $users);
	}






