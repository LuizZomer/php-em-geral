<?php 
    $arr = [1,2,3,4,5,6];

    $removidos = array_splice($arr,1,2);

    var_dump($arr);
    echo "<br>";
    var_dump($removidos);
?>