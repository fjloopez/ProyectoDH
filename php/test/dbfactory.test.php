<?php 

require '../class/DBFactory.php';

echo "<pre>";

$con = DBFactory::$db_type = 'MySQLDB';

var_dump($con);

exit();