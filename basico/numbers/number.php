<?php 
    $num1 = 34;
    $num2 = '60 Dalmata';

    if(is_numeric($num1) && is_numeric($num2)){
        echo "É numerico <br>";
    }else{
        echo "Não é numerico <br>";
    }

    if(is_float($num1)){
        echo "É float<br>";
    }else if(is_int($num1)){
        echo "É inteiro <br>";
    }

    $num3 = 35.65;
    echo ceil($num3);
    echo floor($num3);
?>

