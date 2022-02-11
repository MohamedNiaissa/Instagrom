<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
    <style>
        h1, .divimginfo{
            text-align:center;
        } 
        form{
            display:flex;
            flex-direction:column;
            align-items:center;
        }

        textarea,input{
            width:20%;
        }

      
        
    </style>
</head>
<body>
<?php include(__DIR__."/../partials/Navbar.php");?>

    <h1>Information</h1>
<?php 


$urlImgInfo = substr($urlImgInfo,4);

$findme   = '?';
$pos = strpos($urlImgInfo, $findme);

// Notez notre utilisation de ===.  == ne fonctionnerait pas comme attendu
// car la position de 'a' est la 0-ième (premier) caractère.
if ($pos !== false) {
    if($pos == 0){
        $urlImgInfo = substr($urlImgInfo,1);
        $_SESSION["urlImgInfo"] = $urlImgInfo;
    }
}
// if(str_contains($urlImgInfo,"?")){
//     $urlImgInfo = substr($urlImgInfo,1);

// };
?>

<div class="divimginfo">
    <?= "<img src='$urlImgInfo' height='320' width='320' alt = 'Le chargement de l'image à échoué' >" ?>
</div>
<?= $userID = $_SESSION['userID'];
$imgID = $_SESSION['IdimgInfo']; 
// var_dump( $_SESSION)
?>

<?php

$sqlLike = 'SELECT COUNT(likesID) FROM likes WHERE imageID = :imgID';
    $likeFetch = $db->prepare($sqlLike);
    $likeFetch->execute([
        ':imgID' => $imgID
    ]);
    $dataLikes = $likeFetch->fetch(PDO::FETCH_ASSOC);
    var_dump($dataLikes);
?>
<?= '<p> like:'.$dataLikes['COUNT(likesID)'].'</p>'?>
<form action="/actions/infoimg.php" method="POST">
       <legend>Commentaire</legend> 
       <textarea name="commentairePost" id="" cols="30" rows="4"></textarea> 
        <input type="submit" value="Commenter" required>
</form>

<?php 
try{
// echo "<p>".$_SESSION["comm"]."</p>";
}catch(Exception $e){
}

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
    $url = "https://";   
else  
    $url = "http://";   
// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];   

// Append the requested resource location to the URL   
$url.= $_SERVER['REQUEST_URI'];    
 
// echo $url."<br/>";  

$IdImg = strstr($url, 'g?');
$IdImg = strstr($IdImg, '?h',true);
$IdImg = substr($IdImg,2);

$_SESSION['IdimgInfo'] = $IdImg;

echo "<form action='actions/likecount.php'> <input style ='width:5%' type='submit'value='like' />  ";
require __DIR__."/../../../src/db.php";

$sqlShowCom = 'SELECT commentText FROM comment WHERE imageID = :imageID';  
$queryShowCom = $db->prepare($sqlShowCom);
$queryShowCom->execute([
    ':imageID' => $_SESSION["IdimgInfo"]
]);
$dataShowCom = $queryShowCom->fetchALL(PDO::FETCH_ASSOC);

$_SESSION["comm".$_SESSION["IdimgInfo"]] = $dataShowCom;
$commentairePost = $_SESSION["comm".$_SESSION["IdimgInfo"]];


foreach ($_SESSION["comm".$_SESSION["IdimgInfo"]] as $clef=>$val){
    foreach($val as $key=> $value){
        echo "Commentaire : ";
        echo "<div> <p>". $value. "<p/> </div>";
    }
}


?>


<!-- <?php include(__DIR__."/../partials/Footer.html");?> -->



</body>
</html>