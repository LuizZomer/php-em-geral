<?php 
    class Cachorro {
        function latir(){
            echo "Latindo";
        }

        function andar(){
            echo "Andando";
        }
    }
    $viraLata = new Cachorro;
    $viraLata->andar();
?>