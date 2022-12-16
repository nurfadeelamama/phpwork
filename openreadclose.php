<?php

$filel = fopen('nurfadeela.txt','r') or die ("ไม่พบไฟล์ที่ต้องการ");
echo fread($filel,filesize('nurfadeela.txt'));
fclose($filel);

?>