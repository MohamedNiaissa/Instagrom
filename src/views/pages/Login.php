<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <?php include(__DIR__."/../partials/Navbar.php");?>

    <form action="/actions/login.php" method = "POST">

        <fieldset>
            
            <legend>Login</legend>
        
            <label for="email">Email</label>
            <input type="text" name="logEmail" />

            <label for="Mdp">Mdp</label>
            <input type="password" name="logPass" />

            <button type = "submit"> Me connecter </button>

        </fieldset>


    </form>

    <?php include(__DIR__."/../partials/Footer.html");?>


</body>
</html>