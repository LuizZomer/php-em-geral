<?php 
    $dateA = new DateTime();
    $dateB = new DateTime();

    $dateB->setDate(2001,20,15);

    print_r($dateA);
    echo "<br>";
    print_r($dateB);
    echo "<br>";

    $diff = $dateA->diff($dateB);

    print_r($diff);
    echo "<br>";

    if($dateA > $dateB){
        echo "a data A é maior que a data B";
    }else{
        echo "a data B é maior que a data A";
    }
?>