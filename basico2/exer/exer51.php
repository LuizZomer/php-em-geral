<?php 
    $pessoas = [
        'Luiz' => 54.65,
        'Jean' => 36.52,
        'Erick' => 44.87,
        'Julio' => 13.76
    ];
    arsort($pessoas)
?>



<h2>Rank de pontuação</h2>
<ul>
    <?php foreach($pessoas as $nome => $pontos):?>
        <li><?="$nome - $pontos"?></li>
    <?php endforeach;?>
</ul>