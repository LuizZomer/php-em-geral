<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nota1 = $_POST['nota1'] ?? '';
        $p1 = $_POST['peso1'] ?? '';
        $nota2 = $_POST['nota2'] ?? '';
        $p2 = $_POST['peso2'] ?? '';
        
    ?>
    <h1>Médias aritméticas</h1>
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
        <label for="nota1">Nota 1:</label>
        <input type="number" name="nota1" id="nota1"> <br>
        <label for="peso1">peso 1:</label>
        <input type="number" name="peso1" id="peso1"> <br>
        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota2" id="nota2"> <br>
        <label for="peso2">peso 2:</label>
        <input type="number" name="peso2" id="peso2"> <br>
        <input type="submit" value="Enviar">
    </form>
    <?php 
        $media = ($nota1 + $nota2)/2;
        $ponderada = ($nota1 * $p1 + $nota2 * $p2) / ($p1 + $p2);
        echo "<p>A média aritmetica é $media</p>";
        echo "<p>A média ponderada é $ponderada</p>";

    ?>
</body>
</html>