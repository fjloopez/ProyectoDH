<?php
session_start();
$q = $_GET['q'];

// var_dump($q);
if ($q === "inside"){
	$q = "inside";
	$_SESSION["theme"] = "inside";
} else {
	$q = "outside";
	$_SESSION["theme"] = "outside";
}
echo json_encode($q);
