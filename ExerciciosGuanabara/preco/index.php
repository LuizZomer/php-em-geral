<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $preco = (float)$_POST['preco'] ?? 0;
        $porcentagem = (float)$_POST['porcentagem'] ?? 0;
    ?>
    <h1>Reajuste de preço</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="preco">Preço do produto:</label> <br>
        <input type="number" name="preco" id="preco" step="0.01" value="<?=$preco?>"> <br>
        <label for="porcentagem">Porcentagem do reajuste(<span id="p">?</span>%)</label> <br>
        <input type="range" name="porcentagem" id="porcentagem" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$porcentagem?>"> <br>
        <input type="submit" value="Calcular">
    </form>
    <section>
        <p><?php 
            // $calculo = $preco * ($porcentagem / 100 + 1);
            $calculo = $preco * $porcentagem / 100;
            $novoPreco = $preco + $calculo;
            echo "$porcentagem% de $preco é igual a $calculo e produto vai custar $novoPreco reais";
        ?></p>
    </section>
    <script>
        function mudaValor(){
            p.innerText = porcentagem.value
        }
        mudaValor()
    </script>
</body>
</html>