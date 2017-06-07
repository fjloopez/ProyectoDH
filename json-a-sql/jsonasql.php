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
		$sql = "INSERT INTO user (name, surname, username, email) VALUES ('$name', '$surname', '$username', '$email')";

		$query = $db->prepare($sql);
		$query->execute();
	}
}catch (PDOException $e){
	echo ("FATAL ERROR");
}

$db = NULL;
