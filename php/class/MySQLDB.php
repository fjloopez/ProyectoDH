<?php

class MySQLDB{

	public function find($id, $table, $class)
	{
		$sql = 'SELECT * FROM '.static::$table.' WHERE id = :id';
		$stmt = DB::getConn()->prepare($sql);
		$stmt->bindValue(':id', $id, PDO::PARAM_INT);
		$stmt->execute();

		$result = $stmt->fecth(PDO::FETCH_ASSOC);

		$model = new $class([]);
		$model->toModel($result);
		return $model;

	}

	public function save($table, $model)
	{
		$sql = ($model->id)?$this->update($table, $model)?$this->insert($table, $model);
		$stmt = DB::getConn()->prepare($sql);
		
		foreach ($model->fillable as $column) {
			$stmt->bindValue(":$column", $model->$column);			//chequear el "$column" en video 5 (min 4:30)
		}

		$stmt->execute();
	}

	private function insert($table, $model)
	{
		$columns = implode(', ' , $model->fillable);
		$placeholders = ':'.implode(', ' , $model->fillable);
		return $sql = "INSERT INTO ".$table." ($columns) VALUES ($placeholders)";
	}

	private function update($table, $model)
	{
		
		$set = '';
		foreach ($model->fillable as $column) {
			$set .= "$column=:$column,";
		}
		$set = trim($set, ", ");
		return "UPDATE ".$table." SET $set WHERE id = ".$model->id;
	}
}