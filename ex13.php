<?php

$despesasMensais = [1200.50, 850.75, 1500.00, 920.30, 1100.20];


$somaDespesas = array_sum($despesasMensais);
$qtdDespesas = count($despesasMensais);

$mediaDespesas = $somaDespesas / $qtdDespesas;


echo "Média das despesas mensais: " . number_format($mediaDespesas, 2, ',', '.') . " R$\n";
?>
