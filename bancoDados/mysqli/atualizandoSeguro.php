<?php 
    $host = 'localhost';
    $user = 'root';
    $senha = '';
    $db = 'usuario';

    $conn = new mysqli($host,$user,$senha,$db);

    $stmt = $conn->prepare("UPDATE pessoa SET nome = ?, idade = ?, email = ? WHERE nome = ?");

    $nome = 'Wagner';
    $idade = 27;
    $email = 'wagner@gmail.com';

    $condicao = "Patrick";

    $stmt->bind_param("siss",$nome, $idade, $email, $condicao);

    $stmt->execute();

    if($stmt->error){
        echo "Erro: " . $stmt->error;
    }
?>