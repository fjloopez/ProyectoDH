<?php

class JSONDB{

	public function find($id, $table, $class)
	{

		$registros = file_get_contents('../../users.json');
		$registros = (!$registros)?[]:json_decode($registros, true);

		foreach ($registros[$table] as $registro) {
			if ($registro['id'] == $id){
				$model = new $class([]);
				$model->toModel($registro);
				return $model;

			}
			return null;
		}
	}

	public function save($table, $model)
	{
		//optativo
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