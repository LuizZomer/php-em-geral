<?php 
$name = 'Luiz';
$person = ['name'=>'Luiz','age'=>19];

echo isset($person['name']);

if(isset($name)){
    echo $name;
}else{
    echo 'Não existe';
}
?>