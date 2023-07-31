<?php 
    abstract class Teste{

        public static function testandoClasse(){

            echo "Este método é de uma classe abstrata<br>";

        }

        abstract public function testeAbs();
    }

    Teste::testandoClasse();

    class Nova extends Teste{
        public function testeAbs(){
            echo "Método obrigatorio";
        }
    }

    $n = new Nova;
    $n->testeAbs();
?>