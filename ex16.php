<?php

$caracteresPermitidos = ['a', 'b', 'c', '1', '2', '3', '@', '#', '$'];


$senhaBase = implode('', $caracteresPermitidos);


echo "String para gerar senhas: " . $senhaBase . "\n";
?>
