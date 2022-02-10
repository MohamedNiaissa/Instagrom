<?php
session_start();
//header("Location: /?p=Infoimg?".$_SESSION["urlImgInfo"]);
// var_dump($_SESSION);


    
// var_dump($_SESSION);
$commentaire = $_POST["commentairePost"]  ;
$_SESSION["comm"] = $commentaire;

include __DIR__."/../../src/db.php";

$sqlpostImgGrp = 'SELECT imageID FROM postImage GROUP BY imageID';  
$queryImgGrp = $db->prepare($sqlpostImgGrp);
$queryImgGrp->execute([]);
$dataImgGrp = $queryImgGrp->fetchALL(PDO::FETCH_ASSOC);



//fetch userID


$sql = 'SELECT userID FROM postImage WHERE imageID = :imageID ' ;


    $query = $db->prepare($sql);

    $query->execute([
        ":imageID" => $_SESSION['IdimgInfo']
    ]);

  
    $data = $query->fetch(PDO::FETCH_ASSOC);
    
    if($data == FALSE){
        echo "Veuillez réesayer";
        exit;
    }else{
        var_dump("userID",$data);

    }

$_SESSION["IdUserImg"] = $data["userID"];

//Insertion dans comment




$sql = 'INSERT INTO comment(commentText, imageID, userID) VALUES (:commentText, :imageID, :userID)';

$query = $db->prepare($sql);

$query->execute([
	':commentText' => $commentaire,
	':imageID' => $_SESSION["IdimgInfo"],
	':userID' => $_SESSION["IdUserImg"]
]);

echo "Données insérées avec succès";

// on récupère le dernier id inséré dans la db (si besoin...)
$id = $db->lastInsertId();


//Affichage des commentaires

$sqlShowCom = 'SELECT commentText FROM comment WHERE imageID = :imageID';  //
$queryShowCom = $db->prepare($sqlShowCom);
$queryShowCom->execute([
    ':imageID' => $_SESSION["IdimgInfo"]
]);
$dataShowCom = $queryShowCom->fetchALL(PDO::FETCH_ASSOC);

$_SESSION["comm".$_SESSION["IdimgInfo"]] = $dataShowCom;
$commentairePost = $_SESSION["comm".$_SESSION["IdimgInfo"]];

foreach ($dataShowCom as $clef=>$val){
    foreach($val as $key=> $value){
        echo "<div> <p>". $value. "<p/> </div>";
    }
}

$_SESSION["listOfComment"] = $dataShowCom;
// print_r($commentairePost);
// print_r($_SESSION);

print_r($dataShowCom);

// $_SESSION["userID"] = $dataShowCom["userID"];
// print_r($_SESSION);




?>



