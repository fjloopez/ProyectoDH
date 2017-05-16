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
		} elseif (ctype_alpha(str_replace(' ', '', $nombre)) === false) { 
			//ctype alpha chequea q los caracteres sean del alfabeto (sólo letras)
			$errors_register[] = "El nombre sólo puede contener letras y espacios" ;
		} elseif (strlen($nombre) > 30) {
			$errors_register[] = "El nombre no puede tener más de 30 caracteres" ;
		}

		
		/*=========================
			validar apellido
		=========================*/
		$apellido = trim($_POST['surname']);
		if ($apellido == "") {
			$errors_register[] = "Te faltó ingresar tu apellido";
		} elseif (ctype_alpha(str_replace(' ', '', $apellido)) === false) {
			$errors_register[] = "El apellido sólo puede contener letras y espacios" ;
		}elseif (strlen($apellido) > 30) {
			$errors_register[] = "El apellido no puede tener más de 30 caracteres" ;
		}

		/*=========================
			validar username
		=========================*/
		$username = strtolower(trim($_POST['username']));
		if ($username == "") {
			$errors_register = "Te faltó ingresar tu nombre de usuario";
		} elseif (ctype_alnum(str_replace(' ', '', $username)) === false) {
			$errors_register = "El nombre de usuario sólo puede contener letras y números" ;
		} elseif (getUserByUsername($username) == !false) {
			$errors_register = "El nombre de usuario ya está siendo usado";
		}elseif ((strlen($username) > 12)||(strlen($username) <4)) {
			$errors_register[] = "El nombre de usuario debe tener entre 4 y 12 caracteres" ;
		}


		/*=========================
			validar email
		=========================*/
		$email = trim($_POST['email']);
		if ($email == "") {
			$errors_register[] = "Te faltó ingresar tu email";
		} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errors_register[] = "El email ingresado no es válido";
		} elseif (!preg_match('/@.+\./', $email)) {
			$errors_register[] = "El email no puede usar caracteres raros";
		}

		// aca se podria hacer un ctype alnum, reemplazando el @ con str_replace


		/*=========================
			validar pass
		=========================*/
		if ($_POST['password'] != $_POST['checkpassword']) {
			$errors_register[] = "Las contraseñas no coinciden";
		}elseif ((strlen($_POST['password']) > 20)||(strlen($_POST['password']) <8)) {
			$errors_register[] = "La contraseña debe tener entre 8 y 20 caracteres" ;
		}

		//ver si hay alguna forma de usar todos los caracteres menos "<", ">" y cosas q me rompan el codigo



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
		if (!isset($_POST['gender'])) {
			$errors_register[] = "Te faltó ingresar tu género";
		}


		//devuelvo los errores
		return $errors_register;

	}

	function validUsername(){
		$username = strtolower(trim($_POST['username']));
		if (($username == "") || (ctype_alnum(str_replace(' ', '', $username)) === false) || (strlen($username) > 12) || (strlen($username) <4)) {
			return false;
		} 
		return true;
	}

	function validPassword(){
		$password = strtolower(trim($_POST['password']));
		if (($password == "") || (ctype_alnum(str_replace(' ', '', $password)) === false)) {
			return false;
		} 
		return true;
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
		$username = strtolower($username);
		foreach ((array)$users as $user) {
			if ($user['username'] == $username) {
				return $user;
			}
		}
		return false;
	}

	function checkPassword($user){
		$pass = $_POST['password'];
		$passHash = $user['password'];
		if (password_verify($pass, $passHash)){
			return true;	
		}
		return false;
	}


	function validateLogIn(){
		$errors_log_in = [];
		
		if (validUsername() && validPassword()) {
			$username = strtolower($_POST['username']);
			$user = getUserByUsername($username);
			if (!$user){
				$errors_log_in[] = "El nombre de usuario ingresado es incorrecto.";
			} elseif (!checkPassword($user)){
				$errors_log_in[] = "La contraseña ingresada es incorrecta.";
			} else{
				$_POST['logUser'] = $user;
			}
		} else {
			$errors_log_in['notvalid'] = "El usuario o contraseña ingresada no es valido. Ingrese los datos nuevamente.";
		}	
		return $errors_log_in;
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
			'username' => strtolower($_POST['username']),
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


	function generateRandonPassword($l = 8) {
    	return substr(md5(uniqid(mt_rand(), true)), 0, $l);
	}

	function changePassword($username, $newPassword) {
		$users = getUsers();
		$password = password_hash($newPassword, PASSWORD_DEFAULT);
		$indice = 0;
		foreach ($users as $user) {
			if ($user['username'] == $username){
				$users[$indice]['password'] = $password;
			}
			$indice ++;
		}
		$users = json_encode($users);
		file_put_contents('../../users.json', $users);
	}






