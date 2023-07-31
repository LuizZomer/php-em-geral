<?php 
    class Cachorro{
        public $nome;
        public $raca;

        public function __construct($nome, $raca) {
            $this->nome = $nome;
            $this->raca = $raca;
        }

        public function detalhes(){
            echo "O $this->nome é um cachorro da raça $this->raca";
        }
    }

    $ocaio = new Cachorro("Ocaio", "Bulldog");
    $ocaio->detalhes();
?>