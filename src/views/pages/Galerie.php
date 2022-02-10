<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        div{
            display:flex;
            justify-content:center;
            margin:40px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php include(__DIR__."/../partials/Navbar.php");?>
        <h1>Galerie</h1>

    <?php include(__DIR__."/../../../www/actions/galerie.php");?>
</body>
</html>