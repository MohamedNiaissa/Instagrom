<?php

// on require db.php pour accéder a la variable $db qui contient la connexion à notre DB
require_once 'db.php';

// ici, ":id" est une future variable qui sera injectée au moment de l'executer
$sqlId = 'SELECT * FROM users WHERE id = :id';
$sqlNom = 'SELECT * FROM users WHERE pseudo = :pseudo';
$sqlEmail = 'SELECT * FROM users WHERE email = :email';
$sqlMdp = 'SELECT * FROM users WHERE password = :password';

// on prepare le requete
$queryId = $db->prepare($sqlId);
$queryNom = $db->prepare($sqlNom);
$queryEmail = $db->prepare($sqlEmail);
$queryMdp = $db->prepare($sqlMdp);

// on l'execute en injectant nos variables
$query->execute([
	':id' => 1,
]);

// on recupere les données de la requete, sous forme de tableau associatif
$dataId = $queryId->fetch(PDO::FETCH_ASSOC);
$dataNom = $queryNom->fetch(PDO::FETCH_ASSOC);
$dataEmail = $queryEmail->fetch(PDO::FETCH_ASSOC);
$dataMdp = $queryMdp->fetch(PDO::FETCH_ASSOC);

var_dump("Email", $dataEmail);



?>