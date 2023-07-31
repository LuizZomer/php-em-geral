<?php 
    $arr = [[1,2,3,4],[5,6,7,8],[9,10,11,12]];

    for ($i = 0; $i < count($arr); $i++){
        echo "Estamos no indice $i do array principal<br>";
        for ($c = 0; $c < count($arr[$i]);$c++){
            echo $arr[$i][$c] . "<br>";
        }
    }
?>