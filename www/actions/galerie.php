

<?php


include __DIR__."/../../src/db.php";
$userID = $_SESSION["userID"];
// echo $userID;

$sqlimgPost = 'SELECT imageURL FROM postImage WHERE userID = "'.$userID.'"';
$queryimgPost = $db->prepare($sqlimgPost);
$queryimgPost->execute([]);
$dataImgPost = $queryimgPost->fetchALL(PDO::FETCH_ASSOC);
// $_SESSION["postImage"] = $dataImgPost["imageURL"];


// var_dump($dataImgPost);
foreach ($dataImgPost as $clef=>$val){
        foreach($val as $key=> $value){
            echo "<div> <img src = $value height='420' width='420' ><img/> </div>";
        }
};

?>