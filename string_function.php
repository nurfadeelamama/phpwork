<?php

    $name = "Nurfadeela Mama";
    echo strlen($name);
    echo "<br>";
      //นับว่ามีกี่ตัว
    $word = "I Love U";
    //echo str_word_count($word);
      //นับว่ามีกี่คำ
    echo "<br>";
    echo strrev($name);
      //นับจากหลังไปหน้า
    echo "<br>";
    echo strpos($word,"U");
    echo "<br>";
    echo str_replace($word,"Love","Hate");
    echo "<br>";
    $wie = str_replace("Love","Hate",$word);
    echo $wie;
    echo "<br>";
    echo strtolower($name);
    echo "<br>";
    echo strtolower($word);

?>