<?php 
    $nome = "      Luiz        ";
    echo trim($nome) . "o";

    $tagHtml = "<p>Olá Luiz</p>";
    //Com as tags
    echo $tagHtml;
    //Sem tags
    echo strip_tags($tagHtml);
    echo "Viu? sem o p"
?>