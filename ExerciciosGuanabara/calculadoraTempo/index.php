<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $milisegundos = $_POST['tempo'] ?? 0;
        $sobra = $milisegundos;
        $semana =  intdiv($sobra,604_800);
        $sobra %= 604_800;
        $dia = (int)($sobra/86_400);
        $sobra %= 86_400;
        $hora = intdiv($sobra, 3_600);
        $sobra %= 3_600;
        $minuto = (int)($sobra/ 60);
        $sobra %= 60;
        $segundo = $sobra;

    ?>
    <h1>Calculadora de tempo</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="tempo">Qual o total de segundos?</label>
        <input type="number" name="tempo" id="tempo">
    </form>
    <section>
        <p>Analisa o valor que você digitou, <?=$milisegundos?> segundos equivalem a um total de:</p>
        <ul>
            <li><?=$semana?> semanas</li>
            <li><?=$dia?> dia</li>
            <li><?=$hora?> minutos</li>
            <li><?=$minuto?> minutos</li>
            <li><?=$segundo?> segundos</li>
            
        </ul>
    </section>
</body>
</html>