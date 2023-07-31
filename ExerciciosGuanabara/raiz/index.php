<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $numero = $_POST['numero'] ?? 0;
        $raizQuadrada = number_format(sqrt($numero),3,",",",") ;
        $raizCubica = number_format(pow($numero,1.0/3.0),3,",",".");
    ?>
    <h1>Informe um numero</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">        
        <label for="numero">Número</label> <br>
        <input type="number" name="numero" id="numero"> <br>
        <input type="submit" value="Calcular raizes">
    </form>
    <section>
        <?="Analisando o numero $numero:"?>
        <ul>
            <li><?="A raiz quadrada é $raizQuadrada<br>"?></li>
            <li><?="E a raiz cubica é $raizCubica"?></li>
        </ul>
    </section>

</body>
</html>