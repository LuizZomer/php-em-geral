<?php 
    class Carro{
        public $velocidadeMaxima;

        function setVelocidadeMaxima($vel){
            $this->velocidadeMaxima = $vel;
        }

        function getVelocidadeMaxima(){
            return "A velocidade maxima do carro é $this->velocidadeMaxima km/h";
        }
    }

    $bmw = new Carro;
    $bmw->setVelocidadeMaxima(200);
    echo $bmw->getVelocidadeMaxima()
?>