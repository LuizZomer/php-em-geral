<?php

use Professor as GlobalProfessor;

    class Humano{

    }

    class Professor extends Humano {

    }

    $luiz = new Professor;

    if($luiz instanceof Humano){
        echo "Luiz é humano";
    }
?>