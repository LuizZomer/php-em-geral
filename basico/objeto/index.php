<?php 
    class Pessoa{
        function falar(){
                echo "Olá pessoal";
        }
    }

    $matheus = new Pessoa();
    $matheus->nome = "Matheus";

    echo $matheus->nome;
    $matheus->falar();