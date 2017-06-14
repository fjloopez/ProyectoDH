<?php


require_once 'DBFactory.php';

class Model {

	public function __construct($data)
	{
		// echo"<pre>";var_dump($data);exit();
		$this->toModel($data);
	}

	public static function find($id)
	{
		return DBFactory::getDB()->find($id, static::$table, get_called_class());
	}

	public function toModel($data)
	{
		if(isset($data['id'])) $this->id = $data['id'];
		// echo"<pre>";var_dump($data);exit();
		foreach ($data as $key => $value) {
			// var_dump($this->fillable);
			if (in_array($key, $this->fillable)) {
				if($key !== "password"){
					$this->$key = $value;
				} else{
					$this->$key = password_hash($value, PASSWORD_DEFAULT);
				}
				
			}
		}//exit(); 
	}

	public function save(){
		return DBFactory::getDB()->save(static::$table, $this); 
	}

	

}
