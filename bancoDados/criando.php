<?php 

    $host = 'localhost';
    $user = 'root';
    $senha = '';
    $db = 'usuario';

    $conn = new mysqli($host,$user,$senha,$db);

    // $q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

    $q = "DROP TABLE teste";

    $conn->query($q);

    $conn->close()
?>