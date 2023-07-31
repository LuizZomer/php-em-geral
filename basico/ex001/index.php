<?php

    function sumDigits($num){
        $num = (string) $num;
        $soma = 0;
        for($i = 0;$i < strlen($num);$i++){
            $soma += $num[$i];
        }
        return $soma;
    }

    echo sumDigits(44);

?>
