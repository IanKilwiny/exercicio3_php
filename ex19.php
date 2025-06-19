<?php

$filaAtendimento = ['João Silva', 'Maria Santos', 'Pedro Costa'];


array_unshift($filaAtendimento, 'Ana Oliveira');


array_push($filaAtendimento, 'Luiz Fernandes');


echo "Estado atual da fila de atendimento: ";
print_r($filaAtendimento);
?>
