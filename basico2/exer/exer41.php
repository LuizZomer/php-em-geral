<?php 
    $str = "este item está em promoção";
    $auta = strtoupper(substr($str,18));
    $strCerta = ucfirst(substr($str,0,18)) . $auta;

    echo $strCerta
?>