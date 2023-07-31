<?php 
    $arr = range(10,45);

    foreach($arr as $num){
        $numFinal = $num + 6;
        echo $numFinal;
        if($numFinal > 30){
            echo " Esse numero é muito alto";
        }
        echo "<br>";
    }
?>