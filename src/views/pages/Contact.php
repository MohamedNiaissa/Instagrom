<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <style>
        form{
            display: flex;
            flex-direction:column;
        }
    </style>
</head>
<body>
    <?php include(__DIR__."/../partials/Navbar.php");?>

    <form action="init.php" method = "POST">
        <fieldset>
            <legend>Contactez - nous</legend>

        <label for="Objet">Objet</label>
        <input type="text" />

        <label for="commentaire">commentaire</label>
        <textarea name="com" id="" cols="30" rows="10"></textarea>
        </fieldset>

    </form>

    <?php include(__DIR__."/../partials/Footer.html");?>

</body>
</html>