<?php 
   if(isset($_POST['times'])){
    $times = $_POST['times'];
    var_dump($times);
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
    <h2>Escolha os times</h2>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
        <input type="checkbox" name="times[]" value="Vasco"> Vasco <br>
        <input type="checkbox" name="times[]" value="gremio"> Gremio <br>
        <input type="checkbox" name="times[]" value="fluminense"> Fluminense <br>
        <input type="checkbox" name="times[]" value="cruzeiro"> cruzeiro <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>