<?php 
function teste($name){
    return "Olá meu nome é $name";
}

function teste2($callback){
    // if(is_callable($callback)){
    //     return $callback('Luiz');
    // }else{
    //     'Não é um callback';
    // }
    return call_user_func($callback, 'Luiz');
    
}

$user = 'teste';
echo teste2($user)

// echo call_user_func('teste','Luiz');

?>