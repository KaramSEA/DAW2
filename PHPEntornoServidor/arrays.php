<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //formas
        $numeros=array(4,-9,4,54);
        echo "$numeros[2]<br>";

        //segunda forma
        $nombres=["luz","maria","juan","monica"];
        echo$nombres[3];
        echo "<br>";

        for ($i=0; $i < count($nombres); $i++) { 
            echo "$nombres[$i], ";
        }
        echo "<br>";
        $nombres[]="karam";

        foreach ($nombres as $nombre) {
            echo $nombre.", ";
        }
        
        echo "<h2>arrays asociaivos</h2>";
        
        $capitales=["francia"=>"paris", "italia"=>"roma",
        "canada"=>"ottawa","yemen"=>"sannah"];

        //añadimos mas al array
        $capitales["mongolia"]="ulan bator";

        //la siguiente linea cambia el valor 
        $capitales["francia"]="marsella";
        
        // los mostramos 
        foreach ($capitales as $ciudad) {
            echo "$ciudad, <br>";
        }

        //recorrer imprimiendo tambien la clave 
        foreach ($capitales as $pais => $ciudad) {
            echo "la capital de
            $pais es $ciudad <br>";
        }
        sort($capitales);
    ?>
</body>
</html>