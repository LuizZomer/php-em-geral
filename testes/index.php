<?php 

    $method = $_SERVER['REQUEST_METHOD'];

    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="nome"> <br>
        <input type="submit" value="Enviar">
    </form>
    <?php if($method == 'POST'):?>
        <?="Olá $nome"?>
    <?php endif;?>
</body>
</html>