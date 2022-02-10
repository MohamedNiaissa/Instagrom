<?php
session_start();

$userID = $_SESSION["userID"]
$sqlImg = 'SELECT imageURL FROM postImage WHERE userID = $userID;
        $queryImg = $db->prepare($sqlImg);
        $dataImg = $queryImg->fetch(PDO::FETCH_ASSOC);