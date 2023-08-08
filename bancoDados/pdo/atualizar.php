<?php 
    $host = 'localhost';
    $user = 'root';
    $password = "";
    $db = "usuario";

    $conn = new PDO("mysql:host=$host;dbname=$db",$user, $password);

    $stmt = $conn->prepare("UPDATE pessoa SET nome = :nome, email = :email WHERE nome = 'Daniel'");

    $nome = "Arthur";
    $email = "arthur@gmail.com";

    $stmt->bindParam(":nome",$nome);
    $stmt->bindParam(":email",$email);

    $stmt->execute();
?>