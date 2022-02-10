
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <style>
        h2{
            text-align:center;
        }
        .lienP{
            color:white;
            background: red;
            padding:20px;
        }
        .lienImage{
            display:flex;
            justify-content: space-around;
            margin-top:100px;
        }
    </style>


</head>
<body>
    <?php 
        include(__DIR__."/../partials/Navbar.php");
        echo "<h2>Profil de ".$_SESSION["login"]."</h2>";
        include(__DIR__."/../partials/Footer.html");
    ?>

    <div class="lienImage">
        <a href="/?p=Galerie" class = "lienP"> Accéder à ma gallerie </a>
        <a href="/?p=FormPhoto" class = "lienP"> Poster une photo </a>
    </div>
   
</body>
</html>