<?php 
    $usuario = [
        'nome' => 'Luiz',
        'idade' => 19,
    ];

    if($usuario){
        $nome = $usuario['nome'];
        $idade = $usuario['idade'];
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nome" placeholder="Digite seu nome" value="<?=$nome?>">
    <input type="submit" value="Confirmar">
    </form>
</body>
</html>