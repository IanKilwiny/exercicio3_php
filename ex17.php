<?php

$textoAnalise = "A programação PHP é fundamental para o desenvolvimento web";


$palavras = explode(' ', $textoAnalise);


echo "Vetor de palavras: ";
print_r($palavras);
echo "Quantidade de palavras: " . count($palavras) . "\n";
?>
