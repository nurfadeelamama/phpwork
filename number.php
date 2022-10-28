<?php

    //Integer
    $score = 99;
    $mount = -44;
    $num1 = 0x111; //273
    $num2 = 0111; //73
    $exx = 2e10; //20000000000

    echo "<br>".$score;
    echo "<br>".$mount;
    echo "<br>".$num1;
    echo "<br>".$num2;
    echo "<br>".$exx;

    //Float
    $aa = 2.22;
    $bb = 1.11;
    $ee = 6.1E+5; //610000

    echo $score + $aa;
    echo "<br>";
    echo $score + (int)$aa;
    echo "<br>";
    echo $score + (float)$aa;



?>