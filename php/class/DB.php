<?php


/**
* creado por alcebohín
* 12/06/2017
*/

class DB {

    private static $conn;

    public static function getConn()
    {
        if(!self::$conn){
            $db = new PDO('mysql:host=127.0.0.1;dbname=vikingadventures;charset=utf8','root','');
    		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$conn = $db;
        }
        return self::$conn;
    }
}
