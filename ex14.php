<?php

$registrosTreino = [
    ['Aluno' => 'Carlos', 'Resultados' => [30, 40, 35]],
    ['Aluno' => 'Ana', 'Resultados' => [20, 22, 19]],
    ['Aluno' => 'João', 'Resultados' => [25, 28, 30]]
];

foreach ($registrosTreino as $registro) {
    $media = array_sum($registro['Resultados']) / count($registro['Resultados']);
    echo "Média dos treinos de " . $registro['Aluno'] . ": " . number_format($media, 2, ',', '.') . "\n";
}
?>
