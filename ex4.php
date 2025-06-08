<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numerosSorteados = [];

        for($i = 0; $i < 10; $i++){
            $aleatorio = rand(1, 60);
            array_push($numerosSorteados, $aleatorio);
        }

        echo "<h1>Números gerados: ".join(" ", $numerosSorteados)."</h1>";
    ?>

    <h1>Números primos</h1>
    <ul>
        <?php
            foreach($numerosSorteados as $num){
                if ($num < 2) continue; 
                $ePrimo = true;

                for ($i = 2; $i <= sqrt($num); $i++){
                    if ($num % $i == 0){
                        $ePrimo = false;
                        break;
                    }
                }

                if ($ePrimo){
                    echo "<li>".$num."</li>";
                }
            }
        ?>
    </ul>
</body>
</html>
