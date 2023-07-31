<?php 
    class Car{
        public $rodas = 4;
        public $aro = 20;
    }

    $ferrari = new Car;
    echo $ferrari->aro . "<br>";
    echo $ferrari->rodas . "<br>";

    $ferrari->aro = 18;
    echo $ferrari->aro . "<br>";


?>