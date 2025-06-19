<?php
    $especiesObservadas = ["Beija-flor","Canário", "Bem-te-vi", "Sabiá", "Beija-flor","Coruja"];

 

    if(in_array(" Pardal", $especiesObservadas)){
        echo "Contém pardal";
        echo "<br>Lista";
        echo "<ul>";
        foreach($especiesObservadas as $esp){
            echo "<li>".$esp."</li>";
        }

        echo "</ul>";
    }else{
        echo "Não contém Pardal!";
        

        echo "<ul>";
            foreach($especiesObservadas as $esp){
                echo "<li>".$esp."</li>";
            }

        echo "</ul>";

        array_push($especiesObservadas, "Pardal");

    }

    $especiesObservadas = array_unique($especiesObservadas);


?>