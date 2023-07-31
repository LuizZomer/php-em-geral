<?php 
    $pessoa = new class(){
        public $nome = "Luiz";

        public function dizerNome(){
            echo "Olá meu nome é $this->nome <br>";
        }
    };

    $pessoa->dizerNome()
?>