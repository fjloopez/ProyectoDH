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

	public static function find($id)
	{
		$sql = 'SELECT * FROM user WHERE id = :id';
		$stmt = DB::getConn()->prepare($sql);
		$stmt->bindValue(':id', $id, PDO::PARAM_INT);
		$stmt->execute();

		$result =  $stmt->fetch(PDO::FETCH_ASSOC);

		$user = new user ('','','','','','','');
		$user-toUser($result);
		return $user;
	}

	private function toUser($data)
	{
		$this->id = $data['id'];
		$this->name = $data['name'];
		$this->surname = $data['surname'];
		$this->username = $data['username'];
		$this->email = $data['email'];
		$this->birthDate = $data['birthDate'];
		$this->gender = $data['gender'];
		$this->password = $data['password'];
	}

// En el video, Maxi saca esta función (es decir setPassword) y deja la parte del construct sólo con el $password que le pasan por parámetro

	public function setPassword($value){
		return $this->password = password_hash($value, PASSWORD_DEFAULT);
	}


	public function saveUser(){
		$sql = ($this->id)?$this->update()?$this->insert();
		$stmt = DB::getConn()->prepare($sql);
		$stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
		$stmt->bindValue(':surname', $this->surname, PDO::PARAM_STR);
		$stmt->bindValue(':username', $this->username, PDO::PARAM_STR);
		$stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
		$stmt->bindValue(':birthDate', $this->birthDate, PDO::PARAM_STR);
		$stmt->bindValue(':gender', $this->gender, PDO::PARAM_STR);
		$stmt->bindValue(':password', $this->password, PDO::PARAM_STR);
		$stmt->execute();
	}

	private function insert()
	{
		return $sql = 'INSERT INTO user (name, surname, username, email, birth_date, gender, password) VALUES (:name, :surname, :username, :email, :birthDate, :gender, :password)';
	}

	private function update()
	{
		return 'UPDATE user SET name=:name, surname=:surname, username=:username, email=:email, birthDate=:birthDate, gender=:gender, password=:password WHERE id = '.$this->id
	}



}
