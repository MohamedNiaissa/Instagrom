<?php

require_once 'db.php';

$sql = 'UPDATE users SET pseudo = :pseudo WHERE id = :id';

$query = $db->prepare($sql);
$query->execute([
	':id' => 1,
	':pseudo' => 'LePseudo',
]);

// récupère le nombre de ligne affectée
$count = $query->rowCount();


