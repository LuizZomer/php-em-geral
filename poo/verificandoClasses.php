<?php
    class Humano{
        public $nome;
        public $altura;

        public function dizerNome(){
            echo "Olá $this->nome";
        }
    }

    if(class_exists("Humano")){
        echo "Existe a Classe humano<br>";
        
    }
    print_r(get_class_methods("Humano"));
?>