<?php 
    $host = 'localhost';
    $user = 'root';
    $senha = '';
    $db = 'usuario';

    $conn = new mysqli($host,$user,$senha,$db);

    $nome = "Patrick";
    $idade = 20;
    $email = "patrick@gmail.com";

    $stmt = $conn->prepare("INSERT INTO pessoa VALUES(?,?,?)");

    $stmt->bind_param("sis",$nome,$idade,$email); //s = string, i = intenger, d = double

    $stmt->execute();
?>