<?php 
    class Pessoa{
        public $nome;
        public $idade;

        function andar(){
            echo 'Andando';
        }
    }

    $luiz = new Pessoa;
    $luiz->nome = "Luiz";
    $luiz->idade = 19;

    echo "$luiz->nome - $luiz->idade <br>";
    $luiz->andar()
?>