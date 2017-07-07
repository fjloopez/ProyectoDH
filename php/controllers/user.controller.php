<?php
session_start();
include('../helpers/helpers.php');
include('../class/Usuario.php');

require_once '../class/MySQLDB.php';
require_once '../class/JSONDB.php';
require_once '../class/DBFactory.php';

DBFactory::$db_type = 'MySQLDB';

$q = intval($_GET['q']);
$count = MySQLDB::countUsers(Usuario::$table,Usuario::class);
//var_dump($count);exit();
echo $count;