<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="aeropuerto.css">
</head>
<body>
    <?php
    $aeropuertoVuelos = [
        "FR987"=> [
            "aerolinea"=> "ryanair",
            "numerodepasajero"=> 350,
            "modeloAvion"=> "airbus478",
            "destino"=> "Roma",
        ],
        "FR654"=> [
            "aerolinea"=> "iberia",
            "numerodepasajero"=> 200,
            "modeloAvion"=> "airbus47",
            "destino"=> "Tenerife",
        ],
        "FR321"=> [
            "aerolinea"=> "aireuropa",
            "numerodepasajero"=> 103,
            "modeloAvion"=> "airbus4",
            "destino"=> "Barcelona",
        ],
        "FR458"=> [
            "aerolinea"=> "iberiaExpress",
            "numerodepasajero"=> 56,
            "modeloAvion"=> "airbus78",
            "destino"=> "Bilbao",
        ],
        "FR488"=> [
            "aerolinea"=> "aireuropa",
            "numerodepasajero"=> 56,
            "modeloAvion"=> "airbus78",
            "destino"=> "Bilbao",
        ],
        "FR788"=> [
            "aerolinea"=> "iberiaExpress",
            "numerodepasajero"=> 578,
            "modeloAvion"=> "airbus8",
            "destino"=> "Barcelona",
        ],
    ];
    //Esta funcion nos devolvera toda la informacion que tengamos del vuelo segun el numero de vuelo que le demos. En caso de que no se encuntre
    //devolveremos un null 
    echo "<h1>Ejercicio numero 5</h1>";
    function buscarVuelosSegunNombre ($nombreVuelo,$vuelos){
        $vueloSolicitado=[];
        foreach ($vuelos as $nomVuelo => $valores) {
            if ($nomVuelo==$nombreVuelo) {
                $vueloSolicitado[]=$vuelos[$nombreVuelo];
                return $vueloSolicitado;
            }
        }
        return null;
    }
    echo "<h4>Probamos la funcion de buscar vuelos segun el nombre del vuelo</h4>";
    echo "<div class='resultados'>";
    $vuelosSegunNombre = buscarVuelosSegunNombre('FR321', $aeropuertoVuelos);
    echo "<p>" . print_r($vuelosSegunNombre, true) . "</p>";
    echo "</div>";


    // Esta funcion nos devolvera la informacion de todos los vuelos que se diregen a una ciudad determinida
    
    function buscarVuelosPorDestino($destino, $vuelos) {
        $vuelosDestino = []; 
        
        foreach ($vuelos as $clave => $vuelo) {
            if ($vuelo['destino'] == $destino) {
                $vuelosDestino[$clave] = $vuelo; 
            }
        }
        
        return $vuelosDestino; 
    }
    echo "<h4>Probando la funcion de buscar vuelos por destino</h4>";
    echo "<div class='resultados'>";
    $vuelosBarcelona = buscarVuelosPorDestino('Bilbao', $aeropuertoVuelos);
    echo "<p>" . var_dump($vuelosBarcelona) . "</p>";
    echo "</div>";

    // Función para contar el número total de pasajeros de una aerolínea específica
    function contarPasajerosSegunAerolinea($aerolinea, $vuelos) {
        $totalPasajeros = 0; 

        foreach ($vuelos as $vuelo) {
            if ($vuelo['aerolinea'] == $aerolinea) {
                $totalPasajeros += $vuelo['numerodepasajero']; 
            }
        }
        
        return $totalPasajeros; 
    }

    
    echo "<h4>Total de pasajeros de una aerolínea </h4>";
    echo "<div class='resultados'>";
    $totalPasejeros = contarPasajerosSegunAerolinea('iberiaExpress', $aeropuertoVuelos);
    echo "<p>Numero total de pasajeros: " . $totalPasejeros . "</p>";
    echo "</div>";

    ?>
    
</body>
</html>