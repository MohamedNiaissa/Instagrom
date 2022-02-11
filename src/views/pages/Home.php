<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="import" href="src/views/partials/Navbar.html" />
    <style>
        .form{
            display: flex;
            flex-direction:column;
            /* width: 30%; */
            align-items:flex-end;
        }
        input{
            margin: 10px;
        }

        div{
            display: flex;
            justify-content:center;
        }

        img{
            margin:20px;
        }
    </style>

</head>
<body>
    <?php include(__DIR__."/../partials/Navbar.php");?>
 

    <h1>Instagrom</h1>
    <form class="form" method="POST" action="/actions/tag.php"> 
        Rechercher un tag : <input type="text" name="recherche">
        <input type="SUBMIT" value="Search!"> 
     </form>

    <?php include(__DIR__."/../../../www/actions/home.php");?> 
    <!-- <?php include(__DIR__."/../partials/Footer.html");?> -->

</body>
</html>