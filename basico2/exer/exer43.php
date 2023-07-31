<?php 
    $coisas = "carro - navio - helicoptero - barco - jangada";
    $coisasArray = explode(" - ", $coisas);
    
    for($i = 0; $i < count($coisasArray); $i++){
        echo $coisasArray[$i] . "<br>";
    }
?>