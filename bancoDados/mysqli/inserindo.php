<?php 
    $host = "localhost";
    $user = "root";
    $senha = "";
    $db = "usuario";

    $conn = new mysqli($host,$user,$senha,$db);

    $q = "INSERT INTO pessoa VALUES ('Jeff', 24, 'jeff@gmail.com')";

    $conn->query($q);

    $conn->close();
?>