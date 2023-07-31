<?php 
    $carro = [
        'marca' => 'BMW',
        'motor' => '2.4',
        'teto_solar' => true,
        'cambio' => 'Manual',
        'portas' => 4
    ];
    
    $chaves = array_keys($carro);
    $valor = array_values($carro);

    var_dump($chaves);
    echo "<br>";
    var_dump($valor)
?>