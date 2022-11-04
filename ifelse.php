<?php
    
    $score = 16;

    if( $score % 2 == 0 ){
        echo "เลขคู่";
        }
    echo "<hr corlor='red'>";
     $led ="green";


    echo "<hr corlor='red'>";
        $led = "red";

   if($led == 'red'){
       echo "STOP!!!";
   }elseif($led == 'yellow'){
        echo "SLOWLY";
   }else{
        echo "GOING";
   }
?>