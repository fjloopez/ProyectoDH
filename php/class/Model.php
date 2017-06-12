<?php

/**
* creado por alcebohín
* 12/06/2017
*/

class Model {
	protected $fillable;

	public function __construct($data)
	{
		foreach ($dara as $key => $value) {
			if (in_array($key, $this->fillable)) {
				$this->$key => $value;
			}
		}
	}



}
