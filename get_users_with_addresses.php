<?php
 
 require "connexion.php";


$query = $db->prepare('SELECT * FROM users JOIN address ON users.address = address.id');


$query->execute();

$users_addresses = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($users_addresses);

?>