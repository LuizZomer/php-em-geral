<?php 
    $host = 'localhost';
    $user = 'root';
    $senha = '';
    $db = 'usuario';

    $conn = new mysqli($host,$user,$senha,$db);

    $stmt = $conn->prepare("DELETE FROM pessoa where nome = ?");

    $del = 'Wagner';

    $stmt->bind_param('s', $del);

    $stmt->execute()
?>