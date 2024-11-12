<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="subestilos/estiloEj2.css">
</head>
<body>
    <?php
    echo "<h1>Ejercicio numero 1</h1>";
    $filasKaram=11 % 10 +3;
    $columnasSerroukh= 19 % 10+ 3;
    for ($i=0; $i < $filasKaram; $i++) { 
        
        for ($j=0; $j < $columnasSerroukh; $j++) { 
            echo "*";
        }
        echo "<br>";
    }
    echo "<br><br><br>";

    for ($i=0; $i < $filasKaram; $i++) { 
        for ($j=0; $j < $i; $j++) { 
            echo "*";
        }
        echo "<br>";
    }
    echo "<br><br><br>";

    
    for ($i=0; $i < $filasKaram; $i++) { 
        for ($j=0; $j < $columnasSerroukh; $j++) { 
            echo "*";
        }
        $columnasSerroukh=$columnasSerroukh-1;
        echo "<br>";
        
    }
    echo "<br><br><br>";
    $columnas=12;
    $filas=3;
    for ($i=0; $i < $filasKaram; $i++) { 
        for ($j=0; $j < $columnasSerroukh; $j++) { 
            
            if ($i>$j) {
                echo "&nbsp;";
            }else {
                echo "*";
            }
            
        }
        
        echo "<br>";
        
    }
    echo "<br><br><br>";
    
   

    echo "<h1>Ejercicio numero 2</h1>";
    
    $myarray=[];
    for ($i=0; $i < 5; $i++) { 
        for ($j=0; $j < 5; $j++) { 
            $myarray[$i][$j]=rand(-100,100);
        }
    }
    
    $min = PHP_INT_MAX;
    $max = PHP_INT_MIN;
    for ($i=0; $i < 5; $i++) { 
        for ($j=0; $j < 5; $j++) { 
            if ($myarray[$i][$j] < $min) {
                $min=$myarray[$i][$j];
                
            }

            elseif($myarray[$i][$j] > $max){
                $max=$myarray[$i][$j];
            }

        }
    }

    




    echo "
    <table border=1>
        ";
            for ($i=0; $i < 5; $i++) { 
            echo "<tr>";
            for ($j=0; $j < 5; $j++) { 
                if ($min==$myarray[$i][$j]) {
                    echo "<td class='min'>".$min."</td>";
                }
                elseif($max==$myarray[$i][$j]){
                    echo "<td class='max'>".$max."</td>";
                }
                elseif ($i==2 &&$j==2) {
                    echo "<td class='medio'>".$myarray[$i][$j]."</td>";
                }
                elseif ($i==$j) {
                    echo "<td class='diagonal'>".$myarray[$i][$j]."</td>";
                }
                elseif ($i+$j ==4){
                    echo "<td class='diagonal1'>".$myarray[$i][$j]."</td>";
                }
                
                

                else {
                    echo "<td>".$myarray[$i][$j]."</td>";
                }
            }
        }
            
        echo"</tr>
        
    </table>";

    echo "<h1>Ejercicio numero 3</h1>";
    
    include 'funciones/funcionesKS.php';
    
    echo"<h4>Funcion filtrar prueba</h4>";
    
    $numeros=[9, 8, 7, 6, 5, 4, 3];
    

    $resultado=filtrar($numeros,false);
    print_r($resultado);

    echo "<h4>Funcion sumar negativos prueba</h4>";
    
    $sumados= sumarNegativos(1, 9, -9, -2, 0, 19);
    echo $sumados;

    echo "<h4>Funcion descubrir persona</h4>";
    
    $persona = ["nombre"=> "Juan","edad"=> 22,45,24,"matricula"=> false ];
    $descubriendoPersona=describirPersona($persona);
    echo $descubriendoPersona;

    echo "<h4>Funcion calcular medias</h4>";
    

    $notas = [ "Luz" => [7.2, 9.7, 8],"Alberto" => [ ], "Juan" => [4.1, 8] ];
    $pruebaNotas=calcularMedias($notas);

    var_dump($pruebaNotas);

    echo "<h4>Funcion inventada de calcular la media de temperatura de una ciudad</h4>";

    $datosCiudades = [
        "Madrid" => [20.5, 21.0, 22.3, 19.8, 20.0, 18.5, 21.2],
        "Barcelona" => [18.2, 19.5, 21.0, 20.1, 19.0, 17.8, 18.6],
        "Valencia" => [22.0, 23.1, 24.3, 22.5, 23.2, 21.8, 20.9]
    ];
    $mediaTemperaturas=calcularTemperaturaMediaCiudad("Madrid", $datosCiudades);
    var_dump($mediaTemperaturas);
    
    echo "<h1>Ejercicio numero 4</h1>";
    
    include 'funciones/biblioteca.php';
    echo'<h4>Funcion formatear el titulo</h4>';
    $verdad=true;
    $formatenado=formatear("la ala cos tumb re",$verdad);
    var_dump($formatenado);    
    

    echo'<h4>funcion buscar la antiguedad de libro</h4>';

    
    $anosdeAntiguedad=antiguedad(2019);
    echo $anosdeAntiguedad;
    
    echo "<h4>Funcion de imprirmir los libros con el numero de paginas</h4>";

    echo imprimirLibrosConPaginas($librosConPaginas);

    

    ?>
</body>
</html>