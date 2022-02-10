<?php

    // header("Location: /?p=Profil");

    session_start();

    include (__DIR__."/../../src/db.php");

    $lienImg = $_POST["lienImg"];
    $titre = $_POST["titre"];
    $desc = $_POST["desc"];
    $tag = $_POST["tag"];



    $sql = 'INSERT INTO postImage(likescount, imageURL,userID,titre,description,tag) VALUES (:likescount, :imageURL,:userID,:titre,:description,:tag)';

    $query = $db->prepare($sql);

    $query->execute([

        ':likescount' => 0,
        ':imageURL' => $lienImg,
        ':userID' => $_SESSION["userID"],
        ':titre' => $titre,
        ':description' => $desc,
        ':tag' =>$tag
    ]);

    echo "Données insérées avec succès";

    // on récupère le dernier id inséré dans la db (si besoin...)
    $id = $db->lastInsertId();
?>