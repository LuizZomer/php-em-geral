<?php 
    class Humano{
        public function falar(){
            echo "Olá";
        }
    }

    $luiz = new Humano;

    if(is_object($luiz)){
        echo "É um objeto<br>";
    }

    echo get_class($luiz);

    if(method_exists($luiz, "falar")){
        echo "<br>Metodo existe";
    }

?>