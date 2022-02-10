<?php
include __DIR__."/../../src/db.php";

    $sqlImgHome = 'SELECT imageURL FROM postImage';  
    $queryImgHome = $db->prepare($sqlImgHome);
    $queryImgHome->execute([]);
    $dataImgHome = $queryImgHome->fetchALL(PDO::FETCH_ASSOC);
    if(!empty($_SESSION)){
        foreach ($dataImgHome as $clef=>$val){
            foreach($val as $key=> $value){
                echo "<div> <a href='#'> <img src = $value height='420' width='420' ><img/></a> </div>";
            }
    };
    }else{
        foreach ($dataImgHome as $clef=>$val){
            foreach($val as $key=> $value){
                echo "<div> <img src = $value height='420' width='420' ><img/> </div>";
            }
    };
    
    }
?>