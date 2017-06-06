<?php 
// De Json a MySql


include ("../php/helpers/helpers.php");
$users = getUsers();

echo "<pre>";
try{
	$db = new PDO('mysql:host=127.0.0.1;dbname=base_de_datos_peliculas;charset=utf8', 'root','');

	// $query = $db->query('SELECT * FROM actor');

	// $result = $query->fetchAll(PDO::FETCH_ASSOC);
	// var_dump($result);exit();
	foreach ($users as $u) {
		var_dump($u);
		$name = $u['name'];
		$surname = $u['surname'];
		$sql = "INSERT INTO actor (nombre, apellido, rating, id_pelicula_preferida) VALUES ('$name', '$surname', '1.5', NULL)";

		$query = $db->prepare($sql);
		$query->execute();
	}
}catch (PDOException $e){
	echo ("FATAL ERROR");
}

$db = NULL;
