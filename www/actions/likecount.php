<?php

require_once __DIR__."/../../src/db.php";

$sqlFetchlikes = 'SELECT likesCount FROM postImage WHERE imageID = :imageID';  
$sqlFetchlikes = $db->prepare($sqlFetchlikes);
$queryFetchlikes->execute([
    ':imageID' => $_POST['recherche']
]);
$dataFetchlikes = $queryFetchlikes->fetch(PDO::FETCH_ASSOC);
?>