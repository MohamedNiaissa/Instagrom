<?php
    include (__DIR__."/../../src/db.php");

    var_dump($_POST);
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $mdp = $_POST["motdp"];

    $mdp = hash("sha256",$mdp);
    include (__DIR__."/../../exemple_insert.php");

?>