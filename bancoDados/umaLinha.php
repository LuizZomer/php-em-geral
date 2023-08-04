<?php 
    $host = 'localhost';
    $user = 'root';
    $senha = '';
    $db = 'usuario';

    $conn = new mysqli($host,$user,$senha,$db);

    $nome = "Luiz";

    $stmt = $conn->prepare("SELECT * FROM pessoa WHERE nome = ?");

    $stmt->bind_param("s",$nome);

    $stmt->execute();

    $result = $stmt->get_result();

    $pessoa = $result->fetch_row();

    print_r($pessoa);

    $conn->close();
?>