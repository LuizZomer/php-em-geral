<?php 

    $host = 'localhost';
    $user = 'root';
    $senha = '';
    $db = 'usuario';

    $conn = new mysqli($host,$user,$senha,$db);

    $sql = "SELECT * FROM pessoa";

    $result = $conn->query($sql);

    var_dump($result);

    $conn->close()
?>