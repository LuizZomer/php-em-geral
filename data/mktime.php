<?php 
    $dataNascimento = mktime(00,00,00,02,07,2004);

    echo $dataNascimento . "<br>";

    $dataFormatada = date('d/m/Y', $dataNascimento);

    echo $dataFormatada
?>