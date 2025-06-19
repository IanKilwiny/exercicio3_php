<?php

$idsFonteA = [101, 105, 102];
$idsFonteB = [103, 101, 106];


$todosIds = array_merge($idsFonteA, $idsFonteB);


$todosIdsUnicos = array_unique($todosIds);


print_r($todosIdsUnicos);
?>
