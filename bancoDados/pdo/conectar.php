<?php 
    $host = 'localhost';
    $user = 'root';
    $password = "";
    $db = "usuario";

    $conn = new PDO("mysql:host=$host;dbname=$db",$user, $password)
?>