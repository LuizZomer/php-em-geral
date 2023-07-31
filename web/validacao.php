<?php 

    $validacao = [];

    if(count($_POST) > 0){

        if(!isset($_POST['name'])){
            $validacao[] = "Por favor preencha o nome do usuario";
        }

        if($_POST['email'] == ""){
            $validacao[] = "Por favor preencha o email";
        }

        if(!isset($_POST['password'])){
            $validacao[] = "Por favor preencha a senha";
        }

        if(!isset($_POST['confirmacao'])){
            $validacao[] = "Por favor preencha a confirmação de senha";
        }

        if($_POST['password'] !== $_POST['confirmacao']){
            $validacao[] = "As duas senhas não estão iguais";
        }
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
    <?php if(count($validacao)): ?>
        <ul>
            <?php foreach($validacao as $v):?>
                <li><?=$v?></li>
            <?php endforeach;?>
        </ul>
    <?php endif?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="nome" placeholder="Seu nome"> <br>
        <input type="text" name="email" placeholder="Seu email"> <br>
        <input type="password" name="password" placeholder="Sua senha"> <br>
        <input type="password" name="confirmacao" placeholder="Confirme sua senha"> <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>