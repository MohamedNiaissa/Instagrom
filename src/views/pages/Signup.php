<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
     <?php include(__DIR__."/../partials/Navbar.php");?>

    <form action="/actions/signup.php" method="POST">

        <fieldset>
            <legend>Signup</legend>
         
            <label for="name">Name</label>
            <input  name="nom" type="text" />

            <label for="mail" >Mail</label>
            <input name="email" type="email" />

            <label for="Mdp" >Mdp</label>
            <input name="motdp" type="password" />

            <button type="submit">Créer mon compte</button>

        </fieldset>


    </form>

    <?php include(__DIR__."/../partials/Footer.html");?>

</body>
</html>