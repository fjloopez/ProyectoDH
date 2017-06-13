<?php 
// De Json a MySql


include ("../php/helpers/helpers.php");
$users = getUsers();

echo "<pre>";
try{
	$db = new PDO('mysql:host=127.0.0.1;dbname=vikingadventures;charset=utf8', 'root','');

	// $query = $db->query('SELECT * FROM actor');

	// $result = $query->fetchAll(PDO::FETCH_ASSOC);
	// var_dump($result);exit();
	foreach ($users as $u) {
		var_dump($u);
		$name = $u['name'];
		$surname = $u['surname'];
		$username = $u['username'];
		$email = $u['email'];
		$birth_date = $u['birth_date'];
		$password = $u['password'];

		$sql = "INSERT INTO user (name, surname, username, email, birth_date, password) VALUES ('$name', '$surname', '$username', '$email', '$birth_date', '$password')";

		var_dump($sql);
		$query = $db->prepare($sql);
		$query->execute();
	}
}catch (PDOException $e){
	echo ("FATAL ERROR");
}

$db = NULL;


/*   SCRIPT PARA CREAR TABLA (basica con id y una columna varchar)
CREATE TABLE `vikingadventures`.`new_table` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `column` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC));
*/