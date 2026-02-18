<?php

require "connexion.php";

<<<<<<< HEAD
=======

>>>>>>> 3d63466 (Etape 3 : récupérer un seul utilisateur)
$query = $db->prepare('SELECT * FROM users WHERE id = :id');

$parameters = [
    'id' => $_GET['id']
];

$query -> execute($parameters);

$user = $query->fetch(PDO::FETCH_ASSOC);

var_dump($user);


?>
