<?php

    header("Location: /?p=Profil");

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
        ':userID' => 1,
        ':titre' => $titre,
        ':description' => $desc,
        ':tag' =>$tag
    ]);

    echo "Données insérées avec succès";

    // on récupère le dernier id inséré dans la db (si besoin...)
    $id = $db->lastInsertId();
?>