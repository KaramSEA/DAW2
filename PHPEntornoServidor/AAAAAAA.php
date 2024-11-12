<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .max{
            color: yellowgreen;
            text-decoration-color: magenta;
        }
        .min{
            background-color: yellow;
            text-decoration-color: saddlebrown;
        }
        .medio{
            background-color: grey;
        }
        .diagonal{
            background-color: lawngreen;
        }
        .diagonal1{
            background-color: peru;
        }
    </style>
</head>
<body>
    <?php
    for ($i=0; $i < 3; $i++) { 
        
        for ($j=0; $j < 12; $j++) { 
            echo "*";
        }
        echo "<br>";
    }
    echo "<br><br><br>";

    for ($i=0; $i < 4; $i++) { 
        for ($j=0; $j < $i; $j++) { 
            echo "*";
        }
        echo "<br>";
    }
    echo "<br><br><br>";

    $columnas=12;
    for ($i=0; $i < 3; $i++) { 
        for ($j=0; $j < $columnas; $j++) { 
            echo "*";
        }
        $columnas=$columnas-1;
        echo "<br>";
        
    }
    echo "<br><br><br>";
    $columnas=12;
    $filas=3;
    for ($i=0; $i < $filas; $i++) { 
        for ($j=0; $j < $columnas; $j++) { 
            
            if ($i>$j) {
                echo "&nbsp;";
            }else {
                echo "*";
            }
            
        }
        
        echo "<br>";
        
    }
    echo "<h1>......</h1>";
    $columnas=12;
    $filas=3;
    for ($i=0; $i < $filas; $i++) { 
        
        for ($j=0; $j < $columnas; $j++) { 
            for ($i=0; $i < 5; $i++) { 
                # code...
            }
            echo "*";
        }
        echo "<br>";
    }





    echo "<h2>array bdimensionales</h2>";
    
    $myarray=[];
    for ($i=0; $i < 5; $i++) { 
        for ($j=0; $j < 5; $j++) { 
            $myarray[$i][$j]=rand(-100,100);
        }
    }
    print_r($myarray);
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
                elseif ($i==2 &&$j==2) {
                    echo "<td class='medio'>".$myarray[$i][$j]."</td>";
                }
                elseif ($i==$j) {
                    echo "<td class='diagonal'>".$myarray[$i][$j]."</td>";
                }
                elseif ($i+$j ==4){
                    echo "<td class='diagonal1'>".$myarray[$i][$j]."</td>";
                }
                elseif($max==$myarray[$i][$j]){
                    echo "<td class='max'>".$max."</td>";
                }
                

                else {
                    echo "<td>".$myarray[$i][$j]."</td>";
                }
            }
        }
            
        echo"</tr>
        
    </table>";

    echo"<h1>Funciones</h1>";
    

    function filtrar($array,$verdaderofalse){
        $newarray=[];
        if ($verdaderofalse==true) {
            for ($i=0; $i < count($array); $i++) { 
                if ($i%2==0) {
                    $newarray[]=$array[$i];
                }

            }
            return $newarray;
        } else {
            for ($i=0; $i < count($array); $i++) { 
                if ($i%2!=0) {
                    $newarray[]=$array[$i];
                }

            }
            return $newarray;
        }
    }

    $hola=[9, 8, 7, 6, 5, 4, 3];
    

    $resultado=filtrar($hola,false);
    print_r($resultado);

    echo "<br><br><br><br>";

    function sumarNegativos(...$numeros){
        $sumatorio=0;
        foreach ($numeros as $value) {
           if ($value<0) {
                $sumatorio=$sumatorio+$value;
           }
        }
        return $sumatorio;
    
    }
    
    $sumados= sumarNegativos(1, 9, -9, -2, 0, 19);
    echo $sumados;

    echo "<br><br><br>";
    function describirPersona($arraylolo){
        if ($arraylolo["matricula"]) {
            $hola="si";
        }else {
            $hola="no";
        }
        return $arraylolo["nombre"]." tiene ".$arraylolo["edad"]." y $hola tiene matricula";
    }
    $persona = ["nombre"=> "Juan","edad"=> 22,45,24,"matricula"=> false ];
    $koko=describirPersona($persona);
    echo $koko;

    echo "<br><br><br>";
    function calcularMedias($array){
        $resultados=[];
        
        foreach ($array as $nombres => $numeros) {
            if (count($numeros)==0){
                $resultados[$nombres]=false;
            }
            else {
                //para sumar los valores de un array utilizo array_sum (vista en php.net) para posteriorimente dividirlo entre las notas y asi calcular la media 

                $resultados[$nombres]=array_sum($numeros)/count($numeros);
            }
            
        }
        return $resultados;
    }

    $notas = [ "Luz" => [7.2, 9.7, 8],"Alberto" => [ ], "Juan" => [4.1, 8] ];
    $nnnmmm=calcularMedias($notas);

    var_dump($nnnmmm);

    echo "<br><br><br>";
    

    
    
    
    
    
    

    ?>
</body>
</html>