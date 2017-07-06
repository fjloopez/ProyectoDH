<?php

//usuario.test

require_once '../class/JSONDB.php';						//estos son los q se cambian
require_once '../class/DBFactory.php';
require_once '../class/Usuario.php';

DBFactory::$db_type = 'JSONDB';					//estos son los q se cambian


$user = User::find(3);
$user->name = 'jorgito';
$user->save();