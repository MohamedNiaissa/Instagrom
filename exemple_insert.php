<?php

require_once __DIR__.'/./src/db.php';

$sql = 'INSERT INTO users(username, mail, password,isAdmin) VALUES (:username, :mail, :password, :isAdmin)';

$query = $db->prepare($sql);

$query->execute([
	':username' => $nom,
	':mail' => $email,
	':password' => $mdp,
	':isAdmin' => "FALSE"
]);

echo "Données insérées avec succès";

// on récupère le dernier id inséré dans la db (si besoin...)
$id = $db->lastInsertId();



// sleep(5);
// header("Location: ?p=Home");
