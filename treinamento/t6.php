<?php 
    class Calculadora{
        public function somar($a, $b){
            return $a + $b;
        }

        public function subtrair($a, $b){
            return $a - $b;
        }

        public function multiplicar($a, $b){
            return $a * $b;
        }

        public function dividir($a, $b){
            if($a === 0 || $b === 0){
                echo "Impossivel dividir por zero";
                return;
            }
            return $a / $b;
        }
    }

    $calculadora = new Calculadora;
    echo $calculadora->multiplicar(3,3);
?>