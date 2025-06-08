<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    *{
        margin: 0;
        padding: 0;
    }

    body{
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .conteiner{
        width: 30%;
        height: auto;
        background-color: #FFFF;
        border: solid 1px black;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        border-radius: 5px;


    }

    ul{
        display: flex;
        width: 100%;
        height: 70%;
        display: flex;
        flex-direction: column;
        gap: 50px;
        list-style-type: none;
    }

    li{
        display: flex;
        flex-direction: column;
        background-color: green;
        align-items: center;
        width: auto;
        height: 50px;
        gap: 10px;
    }
</style>
<body>
    <?php
        $produtos = [
            1 => [
                "nome" => "Playstation 5",
                "cod" => "1200"
            ],

            2 => [
                "nome" => "Xbox Series S",
                "cod" => "1230"
            ],

            3 => [
                "nome" => "Nintendo Switch Lite",
                "cod" => "1825"
            ],

            4 => [
                "nome" => "Iphone XR",
                "cod" => "1958"
            ],

            5 => [
                "nome" => "Tv LG Oled 43'",
                "cod" => "2020"
            ]
        ]
    ?>


    <div class="conteiner">
        <h1>Produtos</h1>

        <ul>
                <?php
                    foreach($produtos as $produto){
                        echo "<li>";
                            echo "<p> Nome: ".$produto["nome"]."</p>";
                            echo "<p> Cod: ".$produto["cod"]."</p>";
                        echo"</li>";
                    }

                ?>

        </ul>
    </div>
</body>
</html>