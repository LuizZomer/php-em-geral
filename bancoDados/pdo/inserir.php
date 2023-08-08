<?php 
    $host = 'localhost';
    $user = 'root';
    $password = "";
    $db = "usuario";

    $conn = new PDO("mysql:host=$host;dbname=$db",$user, $password);

    $stmt = $conn->prepare("INSERT INTO pessoa VALUES (:nome,:idade,:email)");

    $nome = 'Daniel';
    $idade = 20;
    $email = "daniel@gmail.com";

    $stmt->bindParam(":nome",$nome);
    $stmt->bindParam(":idade",$idade);
    $stmt->bindParam(":email",$email);

    $stmt->execute();
?>