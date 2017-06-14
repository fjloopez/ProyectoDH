<?php

class DB {

    private static $conn;

    public static function getConn()
    {
        if(!self::$conn){
            $db = new PDO('mysql:host=127.0.0.1;dbname=vikingadventures;charset=utf8','root','');
    		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$conn = $db;
        }
        return self::$conn;
    }
}
