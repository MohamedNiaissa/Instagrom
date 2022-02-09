<?php

    $existing_pages = ['Home', 'Login', 'Profil' ,"Logout",'Signup', 'Contact'];

    //header("Location: /src/views/pages/Home.php");

    $page = "Home";

    if(!empty($_GET['p'])){
        if(in_array($_GET['p'], $existing_pages)){
            $page = $_GET['p'];
        }
    }

    include (__DIR__."/../src/views/pages/$page.php");

    ?>