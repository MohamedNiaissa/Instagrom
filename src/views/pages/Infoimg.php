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
$_SESSION["urlImgInfo"] = $urlImgInfo;
?>

<div class="divimginfo">
    <?= "<img src='$urlImgInfo' height='320' width='320' alt = 'Le chargement de l'image à échoué' >" ?>
</div>

<form action="/actions/infoimg.php" method="POST">
       <legend>Commentaire</legend> 
       <textarea name="commentairePost" id="" cols="30" rows="4"></textarea> 
        <input type="submit" value="Commenter" required>
</form>

<?php try{
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

try{
    foreach ($_SESSION["comm".$_SESSION["IdimgInfo"]] as $clef=>$val){
        foreach($val as $key=> $value){
           echo "<div style='text-align:center'>commentaire : <p>". $value. "<p/> </div>";
        };
    }
}catch(Exception $e){
    echo "Hello"."$e";
}

?>


<!-- <?php include(__DIR__."/../partials/Footer.html");?> -->



</body>
</html>