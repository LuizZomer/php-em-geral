<?php 
    $names = ['Luiz','Maria','Joao'];
    $i = 0;

    while ($i < count($names)){
        echo $names[$i];
        $i++;
        if ($i === 1){
            break;
        }
    }

    $i = 0;

    do {
        echo $names[$i];
        $i++;
        if($i == 1){
            continue;
        }
    }while($i < count($names));