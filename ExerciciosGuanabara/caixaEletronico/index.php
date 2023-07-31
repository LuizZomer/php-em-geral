<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $valor = $_POST['caixa'] ?? 0;
        $valorCompleto= $valor;        
    ?>
    <h1>Caixa eletronico</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="caixa">Valor para sacar:</label><input type="number" name="caixa" id="caixa" step="5" required>
        <input type="submit" value="Sacar">
    </form>
    <section>
        <?php 
            $nota100 = floor($valor / 100);
            $valor %= 100;

            $nota50 = floor($valor/50);
            $valor %= 50;
            
            $nota10 = floor($valor / 10);
            $valor %= 10;

            $nota5 = floor($valor /5);
            $valor %= 5;
        ?>
        <p>Para sacar <?=$valorCompleto?> reais, você precisa de:</p>
        <ul>
            <li><?=$nota100?> notas de cem</li>
            <li><?=$nota50?> notas de cinquenta</li>
            <li><?=$nota10?> notas de dez</li>
            <li><?=$nota5?> notas de cinco</li>
        </ul>
    </section>
</body>
</html>