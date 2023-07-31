<?php 

session_start();
$_SESSION['name'] = 'Luiz';

session_destroy();

echo session_id();

unset($_SESSION['name']);

// echo $_SESSION['name'];
?>