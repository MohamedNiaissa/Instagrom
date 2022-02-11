<?php


    // include (__DIR__."/../../src/db.php");
    session_start();

    $logEmail = $_POST["logEmail"];
    $logPass = $_POST["logPass"];
    // on require db.php pour accéder a la variable $db qui contient la connexion à notre DB
    require_once __DIR__."/../../src/db.php";

    // ici, ":id" est une future variable qui sera injectée au moment de l'executer
 
    $sql = 'SELECT * FROM users WHERE mail = :mail AND password = :password' ;

    // on prepare le requete

    $query = $db->prepare($sql);

    // on l'execute en injectant nos variables
    //var_dump($logPass);
    $query->execute([
        ":mail" => $logEmail,
        ":password" => $logPass
    ]);

    // on recupere les données de la requete, sous forme de tableau associatif
  
    $data = $query->fetch(PDO::FETCH_ASSOC);
    
    // $dataMdp = $queryMdp->fetch(PDO::FETCH_ASSOC);


    if($data == FALSE){
        echo "Veuillez réesayer";
        header("Location: /?p=Login");
        exit;
    }else{
       // sleep(2);
        $_SESSION["login"] = $logEmail;
        $sqlId = 'SELECT userID FROM users WHERE mail = "'.$logEmail.'"';  //
        $queryId = $db->prepare($sqlId);
        $queryId->execute([]);
        $dataId = $queryId->fetch(PDO::FETCH_ASSOC);
        $_SESSION["userID"] = $dataId["userID"];
        print_r($_SESSION);
        header("Location: /?p=Home");
        //echo $_SESSION;
    }

    ?>