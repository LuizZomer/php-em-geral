<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Numero aleatorio</h1>
    <p>O numero sorteado foi: <strong><?=mt_rand(1,100)?></strong></p>
    <form action="index.php">
        <input type="submit" value="Sortear">
    </form>
</body>
</html>