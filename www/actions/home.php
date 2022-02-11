<?php
include __DIR__."/../../src/db.php";
    $tableAllImg = array();
    $i=1;
    $sqlImgHome = 'SELECT imageURL FROM postImage';  
    $queryImgHome = $db->prepare($sqlImgHome);
    $queryImgHome->execute([]);
    $dataImgHome = $queryImgHome->fetchALL(PDO::FETCH_ASSOC);

    
  
    if(!empty($_SESSION)){
        foreach ($dataImgHome as $clef=>$val){
            foreach($val as $key=> $value){
                $Path = '?p=Infoimg?'.$i.'?'.$value;
                echo "<div> <a href= '$Path''> <img src = $value onerror='if (this.src != 'https://cdn.pixabay.com/photo/2013/07/12/12/44/cancel-146131_1280.png') this.src = 'https://cdn.pixabay.com/photo/2013/07/12/12/44/cancel-146131_1280.png''height='420' width='420' ><img/></a> </div>";
                // echo "<form action='/actions/likecount.php' ><input type='checkbox' name='checkBox' /> <input type='submit'value='like' /> ";
                array_push($tableAllImg,$i); 
                $i++;
            }
    };   

    }else{
        foreach ($dataImgHome as $clef=>$val){
            foreach($val as $key=> $value){
                echo "<div> <img src = $value height='420' width='420'><img/> </div>";
            }
    };
    
    }
?>