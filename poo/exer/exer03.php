<?php 
    class Humano {
        public $idade;
        public $nome;

        public function falar(){
            echo "$this->nome está falando<br>";
        }
    }

    class Professor extends Humano{
        public $materia;

        public function ensinar(){
            echo "O Professor $this->nome está ensinando $this->materia<br>";
        }
    }

    $luiz = new Professor;
    $luiz->idade = 19;
    $luiz->nome = "Luiz";
    $luiz->materia = "Programação";
    $luiz->falar();
    $luiz->ensinar()
?>