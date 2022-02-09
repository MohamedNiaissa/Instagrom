<?php


    // include (__DIR__."/../../src/db.php");


    $logEmail = $_POST["logEmail"];
    $logPass = $_POST["logPass"];
    // on require db.php pour accéder a la variable $db qui contient la connexion à notre DB
    require_once __DIR__."/../../src/db.php";

    // ici, ":id" est une future variable qui sera injectée au moment de l'executer
 
    $sql = 'SELECT * FROM users WHERE email = :email AND password = :password' ;
    // $sqlMdp = 'SELECT * FROM users WHERE password = :password';

    // on prepare le requete

    $query = $db->prepare($sql);
    // $queryMdp = $db->prepare($sqlMdp);

    // on l'execute en injectant nos variables


    $query->execute([
        ":email" => $logEmail,
        ":password" => $logPass
    ]);

    // on recupere les données de la requete, sous forme de tableau associatif
  
    $data = $query->fetch(PDO::FETCH_ASSOC);
    // $dataMdp = $queryMdp->fetch(PDO::FETCH_ASSOC);


    if($data == FALSE){
        echo "Veuillez réesayer";
        header("Location; /?p=Login");
    }else{
       // sleep(2);
        header("Location: /?p=Home");
        exit;
    }

    ?>