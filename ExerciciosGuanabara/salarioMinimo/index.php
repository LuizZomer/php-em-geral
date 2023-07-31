<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $salario = $_POST['salario'] ?? 0;
        $salarioMinimo = 1380.30;
        $resto = $salario%$salarioMinimo;
        $tot = intdiv($salario,$salarioMinimo);
    ?>
    <h1>Quantos salario minimos da o seu salario</h1>
    <p>O salario minimo atual é de <?=number_format($salarioMinimo,2,",",".")?></p>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        
        <label for="salario">Informe seu salario</label> <br>
        <input type="number" name="salario" id="salario" step="0.01" value="<?=$salario?>"> <br>
        <input type="submit" value="Dividir">
    </form>
    <?php
        echo "Deu $tot salarios minimos + ". number_format($resto,2,",",".") . 'reais<br>';
    ?>
</body>
</html>