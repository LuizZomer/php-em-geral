<?php 
    $arr = [
        "porta" => 100,
        "maçaneta" => 5,
        "motor" => 2000,
        "retrovisor" => 8
    ];

    function itensCaros($arr){
        $arrItensCaros = [];
        foreach($arr as $itens => $preco){
            if($preco > 10){
                array_push($arrItensCaros, $itens);
            }
        }
        return $arrItensCaros;
    }
    var_dump(itensCaros($arr))
?>