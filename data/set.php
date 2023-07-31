<?php 
    $data = new DateTime();
    
    $data->setDate(2004,02,07);
    var_dump($data);
    echo "<br>";
    $data->setTime(05,12,10);
    var_dump($data);
    echo "<br>";
    echo $data->format("d/m/y");
    

?>