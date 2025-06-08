<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $livros = [
            "Harry Potter e a Pedra Filosofal",
            "Naruto - Vol.1",
            "Hunter x Hunter - Vol.20",
            "The Witcher",
            "A Bela e Fera"
        ]
    ?>

    <h1>Lista Normal</h1>
    <?php
        foreach($livros as $key => $livro){
            echo "<p>".$key." - ".$livro."</p>";
        }
    ?>

    <h1>Adicionando um novo livro</h1>

    <?php
        array_push($livros, "Memórias Póstumas de Brás Cubas");
        foreach($livros as $key => $livro){
            echo "<p>".$key." - ".$livro."</p>";
        }

    ?>

    <h1>Removendo o 3° livro</h1>

    <?php
         
        unset($livros[3]);
        
        foreach($livros as $key => $livro){
            echo "<p>".$key." - ".$livro."</p>";
        }
    ?>

</body>
</html>