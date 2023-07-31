<?php 
    trait Objeto{
        public function teste(){
            echo "Testando traits de objeto <br>";
        }
    }

    trait Testando{
        public function traitTeste(){
            echo "Este método é da trait testando <br>"; 
        }
    }

    class Central{
        use Objeto;
        use Testando;
    }
    $x = new Central;
    $x->teste();
    $x->traitTeste()
?>