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


		/*==============================================
			verificar que tipo de dato devuelve el campo fecha de nacimiento (borrar este coment)
			deberia ser un string AAAA-DD-MM

			recorrer str hasta 1er -, con true => $año
			rocorrer str hasta 2do - => $otro_str
			recorrer otro_str -, con true => $dia
			recorrer otro_str - => $mes

		echo strstr("Hello world!","world",true); 	es para llegar hasta el "-"




		===============================================*/
		// //validar fecha de nacimiento
		// $edad = trim($_POST['birth_date']);
		// if (!is_numeric($birth_date)) {
		// 	$errors[] = "La fecha de nacimiento tiene que ser numérica";
		// }

		//validar pass
		if ($_POST['password'] != $_POST['checkpassword']) {
			$errors[] = "Las contraseñas no coinciden";
		}

		//devuelvo los errores
		return $errors;

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
			'nombre' => $_POST['nombre'],
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





?>