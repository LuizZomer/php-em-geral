<?php 
    $host = 'localhost';
    $user = 'root';
    $password = "";
    $db = "usuario";

    $conn = new PDO("mysql:host=$host;dbname=$db",$user, $password);

    $stmt =$conn->prepare("SELECT * FROM pessoa WHERE idade > :idade");

    $idade = 20;

    $stmt->bindParam(":idade",$idade);

    $stmt->execute();

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    print_r($data)

?>