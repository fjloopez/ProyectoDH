<?php 

require '../class/DBFactory.php';

echo "<pre>";
var_dump(DBFactory::$db_type);

$con = DBFactory::$db_type = 'MySQLDB';

var_dump($con);

exit();