<?php 
     $carro = [
        'marca' => 'BMW',
        'motor' => '2.4',
        'teto_solar' => true,
        'cambio' => 'Manual',
        'portas' => 4
    ];

    if(array_key_exists('marca',$carro)){
        echo "Existe marca no carro";
    }else{
        echo "Não existe";
    }

    echo "<br>";

    if(isset($carro['ano'])){
        echo "Existe";
    }else {
        echo "Não existe";
    }
?>