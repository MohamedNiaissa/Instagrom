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
<?php include (__DIR__."/../../../www/actions/infoimg.php");
$urlImgInfo = substr($urlImgInfo,2);
?>

<div class="divimginfo">
    <?= "<img src='$urlImgInfo' height='320' width='320' alt = 'Le chargement de l'image à échoué' >" ?>
</div>

<form action="" method="POST">
    
       <legend>Commentaire</legend> 
       <textarea name="commentairePost" id="" cols="30" rows="4"></textarea> 
        <input type="submit" value="Commenter">
</form>

<!-- <?php include(__DIR__."/../partials/Footer.html");?> -->

</body>
</html>