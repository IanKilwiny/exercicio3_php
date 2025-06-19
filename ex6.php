<?php


    $categoriasProdutos = ["Eletrônicos", "Roupas", "Livros", "Brinquedos", "Alimentos"];


    $categoriasOrdenadas = $categoriasProdutos; 
    sort($categoriasOrdenadas);
    echo "Categorias em ordem alfabética crescente:<br>";
    foreach ($categoriasOrdenadas as $categoria) {
        echo "- $categoria<br>";
    }

    echo "<br>";


    $categoriasDecrescente = $categoriasProdutos;
    rsort($categoriasDecrescente);
    echo "Categorias em ordem alfabética decrescente:<br>";
    foreach ($categoriasDecrescente as $categoria) {
        echo "- $categoria<br>";
    }

?>
