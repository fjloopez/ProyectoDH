<?php 

require '../class/DB.php';

echo "<pre>";

$con = DB::getConn();

var_dump($con);

exit();