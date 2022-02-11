<?php
session_start();


include __DIR__."/../../src/db.php";

//fetch imageID and imageURL associate to the tag

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


echo "<h1 style = 'text-align:center'> Tag : ".$_POST['recherche'] ." </h1>";
foreach ($dataFetchTag as $clef=>$val){
    foreach($val as $key => $value){} //on recupere value pour la ligne en dessous
    $id = $dataFetchImgIdLink[$clef]['imageID'];
    $imgUrl = $dataFetchUrllink[$clef]['imageURL'];
    echo "<div> <a href ='/p=Home?p=Infoimg?$id?$imgUrl' > <img src = '". $value. "' style = 'width:180px; margin:20px;text-align:center' /> </a> </div>";
}







