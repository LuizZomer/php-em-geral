<?php 
    class Car{

        public $rodas = 4;

    }

    class Mecanico {
        public function alterarRodas($obj){
            $obj->rodas = 10;
        }
    }

    $carro = new Car;
    echo $carro->rodas . "<br>";
    $luiz = new Mecanico;
    $luiz->alterarRodas($carro);
    echo $carro->rodas . "<br>";


?>