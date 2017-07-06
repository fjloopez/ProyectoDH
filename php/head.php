<?php session_start(); ?>
<?php


//    require_once 'class/MySQLDB.php';
//    require_once 'class/JSONDB.php';
//    require_once 'class/DBFactory.php';
//
//    DBFactory::$db_type = 'MySQLDB';

	if (isset($_SESSION['rememberMe'])){
	setcookie("rememberMe",$_SESSION['username'],time()+99999);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Viking Adventures</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/styles.css">
	<link rel="stylesheet" href="../css/stylesInside.css" class="estilos">
	
</head>
