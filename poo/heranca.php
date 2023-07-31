<?php 
    class Humano{
        public $idade = 19;

        public function falar(){
            echo "Olá Mundo! <br>";
        }

        private function gritar(){
            echo "AAAAAAAAA<br>";
        }

        public function acessarGritar(){
            $this->gritar();
        }

        protected function falarBaixinho(){
            echo "lalala<br>";
        }

    }

    class Programador extends Humano{
        public function acessoFalarBaixinho(){
            $this->falarBaixinho();
        }
    }

    $ze = new Programador;
    $ze->falar();
    $ze->acessarGritar();

?>