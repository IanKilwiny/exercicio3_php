<?php

    $precosProdutos = [
        "Arroz" => 4.99,
        "Feijão" => 5.49,
        "Macarrão" => 3.29,
        "Leite" => 4.49,
        "Café" => 8.99
    ];


    asort($precosProdutos);


    echo "Produtos ordenados por preço:<br>";
    foreach ($precosProdutos as $produto => $preco) {
        echo "- $produto: R$ " . number_format($preco, 2, ',', '.') . "<br>";
    }

?>