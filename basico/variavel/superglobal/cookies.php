<?php 
    // setcookie('Curso','Eng. software',strtotime('-5days'));

    if(isset($_COOKIE['Curso'])){
        echo $_COOKIE['Curso'];
    } else{
        echo 'Cookie inexistente';
    }
?>