<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis php</title>
</head>
<body>
    <h1>Variavies</h1>
    <?php 
        $nome = 'Luiz';
        // $sobrenome = 'Zomer';
        const PAIS = 'Brasil';
        $nome .= ' Zomer';

        echo "Olá, $nome! Você mora no " . PAIS;

        $nome = "Rafael";
        $sobrenome = 'Menezes';

        // echo"Olá, $nome $sobrenome"


    ?>
</body>
</html>