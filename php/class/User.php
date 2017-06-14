<?php


require_once 'DB.php';
require_once 'Model.php';

class User extends Model {

	public $name;
	public $surname;
	public $username;
	public $email;
	public $birth_date;
	public $gender;
	public $password;

	public $fillable = ['name', 'surname', 'username', 'email', 'birth_date', 'gender', 'password'];
	public static $table = 'user';


}
