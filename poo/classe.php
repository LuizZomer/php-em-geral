<?php 
    class User {

        function Falar(){
            echo "Olá eu sou um objeto <br>";
        }

    }

    $luiz = new User;
    $maria = new User;
    $luiz->falar() 
?>