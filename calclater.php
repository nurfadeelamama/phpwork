<?php

$num1 = $_POST['num1'];
$num2 =$_POST['num2'];
$op =$_POST['op'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลลัพธ์ที่ได้</title>
    <style>
        h1{
            text-align: center;
            font-size: 120px; 
            color: #1D5E2E;
        }
        p{
            text-align: center;
            font-size: 45px; 
        }
        div{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            width: 400px;
            height: 400px;
            background: #EEF0EA;
            border-radius: 50px;

        }
        h4{
            text-align: center;
            font-size: 50px; 
        }
        body{
            background: linear-gradient(120deg, #CD853F, #A0522D);
            height: 100vh;
        }
    </style>
</head>
<body>
<div>
     <p>ผลลัพธ์ที่ได้</p>
     <h1 >

    <?php  

    switch ($op){
    case '+':
        function addNumber($num1,$num2){
            echo  $num1 + $num2;
            }
            echo addNumber($num1,$num2);
        break;
    case '-':
        function minusNumber($num1,$num2){
            echo  $num1 - $num2;
            }
            echo minusNumber($num1,$num2);
        break;
    case 'x':
        function multipleNumber($num1,$num2){
            echo  $num1 * $num2;
            }
            echo multipleNumber($num1,$num2);
        break;
    case '/':
        function divideNumber($num1,$num2){
            echo  $num1 ** $num2;
            }
            echo divideNumber($num1,$num2);
        break;  
    case 'xX':
        function exponentiationNumber($num1,$num2){
            echo  $num1 ** $num2;
            }
            echo exponentiationNumber($num1,$num2);
        break;  
    default:
        function modNumber($num1,$num2){
            echo  $num1 % $num2;
            }
            echo modNumber($num1,$num2);
        break;
}
?>
</h1>

</div>    
</body>
</html>




