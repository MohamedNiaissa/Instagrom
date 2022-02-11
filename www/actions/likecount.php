<?php
session_start();

$userID = $_SESSION['userID'];
$imgID = $_SESSION['IdimgInfo'];
$isLike = FALSE;
require_once __DIR__."/../../src/db.php";

    $sqlLike = 'SELECT likesID FROM likes WHERE imageID = :imgID AND userID = :UserID';
    $likeFetch = $db->prepare($sqlLike);
    $likeFetch->execute([
        ':imgID' => $imgID,
        ':UserID' => $userID
    ]);
    $dataLike = $likeFetch->fetch(PDO::FETCH_ASSOC);

    if ($dataLike==FALSE) {
        $_SESSION["compte"."$userID"."$imgID"] = "1";

        $sql = 'INSERT INTO likes(userID, imageID) VALUES (:userID, :imageID)';

        $query = $db->prepare($sql);
        var_dump($_SESSION);
        $query->execute([
            ':userID' => $userID,
            ':imageID' => $imgID,
        ]);

        echo "Données insérées avec succès";
    }else{
        $_SESSION["compte"."$userID"."$imgID"] = "0";
        $sql='DELETE FROM likes WHERE imageID = :imgID AND userID = :UserID';
        $likeFetch = $db->prepare($sql);
    $likeFetch->execute([
        ':imgID' => $imgID,
        ':UserID' => $userID
    ]);

    var_dump($_SESSION);
    }   



if($isLike){
    // récupérer les info du User et de l'image pour créer une ligne dans la table Like de la BDD
    //compter le nombre de user ID qui ont like 1 imageID et affiché le résultat à côté du bouton like 
}else {
    // Vérifier si la ligne userID et imageID existe si c'est le cas alors on la supprime; (isset(userID, imageID)) {suppr}
}
?>
<!--
variable isLike bool (vérifie si l'image a déjà été liker par l'utilisateur)
si l'image est like => rajoute une ligne dans la base de donnée
si le bool passe à false  on supprime la ligne likecount créer pour se faire on récupère le User et l'Image ID
--> 