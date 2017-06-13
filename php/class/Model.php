<?php

/**
* creado por alcebohín
* 12/06/2017
*/

class Model {
	protected $fillable;

	public function __construct($data)
	{
		$this->toModel($data);
	}

	public static function find($id)
	{
		$sql = 'SELECT * FROM '.static::$table.' WHERE id = :id';
		$stmt = DB::getConn()->prepare($sql);
		$stmt->bindValue(':id', $id, PDO::PARAM_INT);
		$stmt->execute();

		$result =  $stmt->fetch(PDO::FETCH_ASSOC);

		$class = get_called_class();

		$user = new $class ('','','','','','','');
		$user->toUser($result);
		return $user;
	}

	private function toModel($data)
	{
		if(isset($data['id'])) $this->id = $data['id'] 
			foreach ($data as $key => $value) {
				if (in_array($key, $this->fillable)) {
				$this->$key => $value;
				}
			} 
	}

	public function saveUser(){
		$sql = ($this->id)?$this->update()?$this->insert();
		$stmt = DB::getConn()->prepare($sql);
		
		foreach ($this->fillable as $column) {
			$stmt->bindValue(":$column", $this->$column);			//chequear el "$column" en video 5 (min 4:30)
		}

		$stmt->execute();
	}

	private function insert()
	{
		$columns = implode(', ' , $this->fillable);
		$placeholders = ':'.implode(', ' , $this->fillable);
		return $sql = "INSERT INTO ".static::$table." ($columns) VALUES ($placeholders)";
	}

	private function update()
	{
		
		$set = '';
		foreach ($this->fillable as $column) {
			$set .= "$column=:$column,";
		}
		$set = trim($set, ", ");
		return "UPDATE ".static::$table." SET $set WHERE id = ".$this->id;
	}

}
