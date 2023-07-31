<?php 
    $x = 'nome';
    $$x = 'Matheus';

    echo $nome;
    echo "<br>";
    $y = 10;

    $z =& $y;

    echo $z;
    echo $y;

    $z = 13;

    echo $z;
    echo $y
?>