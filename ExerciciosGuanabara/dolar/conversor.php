<?php 

$real = $_GET['din'] ?? 0;
$dolar = $real/4.78;
$padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);

echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD")

?>