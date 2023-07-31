<?php 
    function ordenarNumeros($arr){
        sort($arr);
        return $arr;
    }
    $ordenado = ordenarNumeros([5,6,3,2,9,1,0]);
    var_dump($ordenado)
?>