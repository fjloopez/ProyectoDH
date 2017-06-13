<?php

/**
* creado por fjlopez
* 11/06/2017
*/

require_once 'DB.php';
require_once 'Model.php';

class User extends Model {

	private $name;
	private $surname;
	private $username;
	private $email;
	private $birthDate;
	private $gender;
	private $password;

	public $fillable = ['name', 'surname', 'username', 'email', 'birthDate', 'gender', 'password'];
	public static $table = 'user';


}
