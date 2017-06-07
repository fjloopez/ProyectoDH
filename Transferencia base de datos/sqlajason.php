<?php
// De MySql a Json
    
echo "<pre>";
try{
    $db = new PDO('mysql:host=127.0.0.1;dbname=vikingadventures;charset=utf8', 'root','');

    $query = $db->query('SELECT * FROM user');
    $users = $query->fetchAll(PDO::FETCH_ASSOC);
	

    var_dump($users);

    $jsonUsers = json_encode($users);

    file_put_contents('../users.json', $jsonUsers);

}catch (PDOException $e){
	echo ("FATAL ERROR");
}

$db = NULL;