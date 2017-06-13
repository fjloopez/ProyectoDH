<?php



class DBFactory{
	public static $db_type;

	public static function getDB()
	{
		return new self::$db_type;
	}
}