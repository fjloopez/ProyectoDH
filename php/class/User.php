<?php 

/**
* creado por fjlopez
* 11/06/2017
*/
class User
{

	private $name;
	private $surname;
	private $username;
	private $email;
	private $birthDate;
	private $gender;
	private $password;

	private $db;
	
	function __construct($name, $surname, $username, $email, $birthDate, $gender, $password)
	{
		$this->name = $name;
		$this->surname = $surname;
		$this->username = $username;
		$this->email = $email;
		$this->birthDate = $birthDate;
		$this->gender = $gender;
		$this->password = $this->setPassword($password);

		$this->db = new PDO('mysql:host=127.0.0.1;dbname=vikingadventures;charset=utf8','root','');
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}


	public function setPassword($value){
		return $this->password = password_hash($value, PASSWORD_DEFAULT);	
	}


	public function saveUser(){
		$sql = 'INSERT INTO user (name, surname, username, email, birth_date, gender, password) VALUES (:name, :surname, :username, :email, :birthDate, :gender, :password)';
		$stmt = $this->db->prepare($sql);
		$stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
		$stmt->bindValue(':surname', $this->surname, PDO::PARAM_STR);
		$stmt->bindValue(':username', $this->username, PDO::PARAM_STR);
		$stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
		$stmt->bindValue(':birthDate', $this->birthDate, PDO::PARAM_STR);
		$stmt->bindValue(':gender', $this->gender, PDO::PARAM_STR);
		$stmt->bindValue(':password', $this->password, PDO::PARAM_STR);
		$stmt->execute();
	}




}