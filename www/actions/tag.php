<?php
session_start();
//header("Location: /?p=Infoimg?".$_SESSION["urlImgInfo"]);
// var_dump($_SESSION);


    
// var_dump($_SESSION);
// $commentaire = $_POST["commentairePost"]  ;

include __DIR__."/../../src/db.php";

$sqlFetchTag = 'SELECT imageID,imageURL FROM postImage WHERE tag = :tag';  
$queryFetchTag = $db->prepare($sqlFetchTag);
$queryFetchTag->execute([
    ':tag' => $_POST['recherche']
]);
$dataFetchTag = $queryFetchTag->fetchALL(PDO::FETCH_ASSOC);


//fetch imageURL
$sqlFetchimgUrllink = 'SELECT imageURL FROM postImage WHERE tag = :tag';  
$queryFetchUrllink = $db->prepare($sqlFetchimgUrllink);
$queryFetchUrllink->execute([
    ':tag' => $_POST['recherche']
]);
$dataFetchUrllink = $queryFetchUrllink->fetchALL(PDO::FETCH_ASSOC);


//fetch imageID
$sqlFetchImgIdLink = 'SELECT imageID FROM postImage WHERE tag = :tag';  
$queryFetchImgIdLink = $db->prepare($sqlFetchImgIdLink);
$queryFetchImgIdLink->execute([
    ':tag' => $_POST['recherche']
]);
$dataFetchImgIdLink = $queryFetchImgIdLink->fetchALL(PDO::FETCH_ASSOC);

// var_dump($dataFetchImgIdLink);
$i=0;
var_dump("dataFetchTag",$dataFetchTag);

foreach ($dataFetchTag as $clef=>$val){
    foreach($val as $key => $value){}
    $id = $dataFetchImgIdLink[$clef]['imageID'];
    $imgUrl = $dataFetchUrllink[$clef]['imageURL'];
    echo "<div> <a href ='/p=Home?p=Infoimg?$id?$imgUrl' > <img src = '". $value. "' style = 'width:180px' /> </a> </div>";
}

// $_SESSION["IdUserImg"] = $data["userID"];






