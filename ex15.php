<?php

$registrosTreino = [
    ['Aluno' => 'Carlos', 'Resultados' => [30, 40, 35]],
    ['Aluno' => 'Ana', 'Resultados' => [20, 22, 19]],
    ['Aluno' => 'João', 'Resultados' => [25, 28, 30]]
];


foreach ($registrosTreino as $registro) {
    $melhorResultado = max($registro['Resultados']);
    echo "Melhor resultado de " . $registro['Aluno'] . ": " . $melhorResultado . "\n";
}
?>
