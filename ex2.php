<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    
        $boletim = [
            "portugues" => [
                "n1" => 7.5,
                "n2" => 8.5

            ],

            "matematica" => [
                "n1" => 6.65,
                "n2" => 2.5

            ],

            "historia" => [
                "n1" => 8.0,
                "n2" => 7.0

            ],

            "geografia" => [
                "n1" => 10.0,
                "n2" => 8.9
            ]


        ]
    ?>


    <div>
        <div>
            <?php
                foreach ($boletim as $key => $bol){
                    $n1 = $bol["n1"];
                    $n2 = $bol["n2"];
                    $media = ($n1 + $n2) / 2;
                    echo "<div>";
                        echo "<h1>".strtoupper($key)."</h1>";
                        echo "<ul>";
                            echo "<li> Nota 1: ".$n1."</li>";
                            echo "<li> Nota 2: ".$n2."</li>";
                            echo "<li> Média: ". $media."</li>";
                        echo "</ul>";
                    echo "</div>";
                }

            ?>
        </div>
    </div>
    
</body>
</html>