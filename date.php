<?php

echo date('l,d/m/Y'); //วัน เดือน ปี
echo "<br>";
echo date('H:i:s'); //ชั่วโมง นาที วิ
echo "<br>";
echo date('W'); //สัปดาห์ของปี
echo "<br>";
echo date('D,d/F/Y'); //คำย่อของวัน เดือนที่เป็นตัวอักษร ปี
echo "<br>";
$ythai = date('Y') + 543; //ปีของไทย
echo $ythai;
echo "<br>";
echo date('d/F/');
echo " ".$ythai;

?>