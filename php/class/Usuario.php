<?php

//usuario.test

require_once 'JSONDB.php';						//estos son los q se cambian
require_once '/DBFactory.php';
require_once '/User.php';

DBFactory::$db_type = 'JSONDB';					//estos son los q se cambian


$user = User::find(3);
$user->name = 'jorgito';
$user->save();