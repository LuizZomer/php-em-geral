
<?php 
    include_once("connector.php");
    include_once("dao/carDAO.php");

    $carDao = new CarDAO($conn);

    $cars = $carDao->findAll();
?>

<h1>Insira um carro:</h1>
<form action="process.php" method="post">
    <div>
        <label for="brand">Marca do carro:</label>
        <input type="text" name="brand" placeholder="Insira a marca">
    </div>
    <div>
        <label for="km">kilometragem:</label>
        <input type="text" name="km" placeholder="Insira a kilometragem">
    </div>
    <div>
        <label for="color">cor do carro:</label>
        <input type="text" name="color" placeholder="Insira a cor">
    </div>
    <input type="submit" value="Salvar">
</form>
<ul>
    <?php foreach($cars as $car):?>
        <li><?=$car->getBrand()?> - <?=$car->getKm()?> - <?=$car->getColor()?></li>
    <?php endforeach?>
</ul>