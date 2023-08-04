<?php 
    $conn = new mysqli("localhost",'root','','usuario');

    $nome = 'Luiz';

    $stmt = $conn->prepare("SELECT * FROM pessoa WHERE nome = ?");

    $stmt->bind_param("s",$nome);

    $stmt->execute();

    $result = $stmt->get_result();

    $data = $result->fetch_all();

    var_dump($result)
?>