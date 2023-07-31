<?php 
    //Primeira ocorrencia
    $str = "Estou testando um metodo";
    $primeiraOcorrencia = strpos($str, "testando");
    echo $primeiraOcorrencia . "<br>";

    $ultimaOcorrencia = strrpos($str, "m");
    echo $ultimaOcorrencia
?>