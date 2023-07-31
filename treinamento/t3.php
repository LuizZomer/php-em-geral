<?php 
    function encontrarPares($arr){
        $numerosPares = [];
        for($i = 0; $i < count($arr);$i++){
            if($arr[$i] % 2 === 0){
                array_push($numerosPares, $arr[$i]);
            }
        }
        return $numerosPares;
    }

    $par = encontrarPares([1,2,3,4,5,6,7,8,9,10]);
    var_dump($par)
?>