<?php 
    interface Caracteristica {
        const nome = "Luiz";

        public function falar();

    }

    class Humano implements Caracteristica{
        public $idade = 19;

        public function falar(){
            echo "Olá mundo! <br>";
        }

        public function dizerNome(){
            echo "Meu nome é " . self::nome . "<br>";
        }
    }

    $luiz = new Humano;
    $luiz->falar();
    $luiz->dizerNome()

?>