<?php

$host = "db.3wa.io";
$port = "3306";
$dbname = "barbaramase_phpj6";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "barbaramase";
$password = "a00b6c174df6836deabe8330debe5e49";

$db = new PDO (
    $connexionString,
    $user, 
    $password
);


var_dump($db)

?>