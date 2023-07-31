<?php 
    class Animal{
        public $nome;

        function escolherNome($nome){
            $this->nome = $nome;
        }

    }

    $Ocaio = new Animal;
    $Ocaio->escolherNome("Ocaio");
    echo "O nome do animal é $Ocaio->nome"
?>