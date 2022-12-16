<?php

$file = fopen("pattani.txt","w");
fwrite($file,"Nutfadeela Mama\n");

$filel = fopen("pattani.txt","r");
echo fread($filel,filesize('pattani.txt'));
fclose($filel);

echo "<br>";

$file = fopen("pattani.txt","w");
fwrite($file,"INFORMATION TECHNOLOGY\n");

$filel = fopen("pattani.txt","r");
echo fread($filel,filesize('pattani.txt'));
fclose($filel);



?>