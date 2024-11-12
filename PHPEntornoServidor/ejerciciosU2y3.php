<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios unidades 2 y 3</title>
</head>
<body>
    <h2>Ej1</h2>
    <?php
    $numentero=1;
    echo gettype($numentero).$numentero."<br>";
    $numdecimal=1.9;
    echo gettype($numdecimal).$numdecimal."<br>";
    $numString="hola";
    echo gettype($numString).$numString."<br>";
    $numtrue=true;
    echo gettype ($numtrue).$numtrue."<br>";
    ?>
    <h2>Ej2</h2>
    <?php
        $a=2;
        $b=5;
        $potencia=$a**$b;
        $modulo=$a%$b;
        echo "La potencia es $potencia y el modulo es $modulo"
    ?>
    <h2>Ej3</h2>
    <?php
        $nombre="Karam";
        $apellidos="serroukh";
        $edad=22;
        echo"
        <table border=auto>
            <tr>
                <td>Nombre</td>
                <td>$nombre</td>
            </tr>
            <tr>
                <td>Apellidos</td>
                <td>$apellidos</td>
            </tr>
            <tr>
                <td>Edad</td>
                <td>$edad</td>
            </tr>
        </table>   
        ";
    ?>
    <h2>Ej4</h2>
    <?php
        $edad=19;
        echo "Actualmente tienes $edad años, 
        dentro de 10 tendras ". $edad+10 ." te quedan ". 60-$edad . " para jubilarte";
    ?>
    <h2>Ej5</h2>
    <?php
        $precio=100;
        if ($precio>=1000){
            echo "caro";
        } elseif ($precio>=100) {
            echo "medio";
        } elseif ($precio>0) {
            echo "barato";
        } else{
            echo "precio negativo";
        }
    ?>
    <h2>Ej6</h2>
    <?php
    $hora=4;
    $minuto=42;
    $segundo=55;

    $segundo++;
    if ($segundo>=60) {
        $segundo=10;
        $minuto++;
        if ($minuto>=60) {
            $minuto=0;

            $hora++;
            if ($hora>=24) {
                $hora=0;
            }
        }
    }
    echo "<p>Son las $hora:$minuto:$segundo</p>";
    ?>
    <h2>Ej7</h2>
    <?php
        $maximo=65;
        for ($i=1; $i <= $maximo; $i++) { 
            echo "$i ,";
        }
    ?>
    <h2>Ej8</h2>
    <?php
        for ($i=9; $i <= 15; $i++) { 
            echo "
                <ul>$i</ul>
            ";
        }
    ?>
    <h2>Ej9</h2>
    <?php
        for ($i=0; $i <= 10; $i+=2) { 
            echo "$i, ";
        }
    ?>
    <h2>Ej10</h2>
    <?php
        for ($i=50; $i >= 20; $i--) { 
            if ($i%3 && $i%7){
                echo "$i ,";
            } else{
                echo "- ,";
            }
        }
    ?>
    <h2>Ej11</h2>
    <?php
        $sumatorio=0;
        for ($i=0; $i <= 10; $i++) { 
            $sumatorio=$sumatorio+$i;
        }
        echo $sumatorio;
    ?>
    <h2>Ej12</h2>
    <?php
        $numeroHO=9;
        $sumatoriofactorial=1;
        for ($i=1; $i <= $numeroHO; $i++) { 
            $sumatoriofactorial=$sumatoriofactorial*$i;
        }
        echo $sumatoriofactorial;
    ?>
    <h2>Ej13</h2>
    <?php
        $base=2;
        $exponente=5;
        $resultado=1;
        for ($i=0; $i < $exponente; $i++) { 
            $resultado=$base*$resultado;
        }
        echo $resultado;
    ?>
    <h2>Ej14</h2>
    <?php
        $base=2;
        $exponente=5;
        $resultado=1;
        $a=0;
        while ($a < $exponente) {
            $resultado=$base*$resultado;
            $a++;
        }
        echo $resultado;
    ?>
    <h2>Ej15</h2>
    <?php
        $number=7;
        echo"
        <table border=auto>
            <tr>
                <th>a</th>
                <th>b</th>
                <th>resultado</th>
            </tr>";
            for ($i=0; $i <= 10; $i++) { 
                $resultado=$number*$i;
                echo "
                <tr>
                    <td>$number</td>
                    <td>$i</td>
                    <td>$resultado</td>
                </tr>";
            }
        "</table>   
        ";
    ?>
    <h2>Ej16</h2>
    <?php
    $num1=0;
    $num2=1;

        for ($i=0; $i < 20; $i++) { 
            $num3=$num1+$num2;
            $num1=$num2;
            $num2=$num3;
            echo $num3.",";
        }
    ?>
    <h2>Ej17</h2>
    <?php
        $filas=3;
        $columnas=5;
        for ($i=0; $i < $filas; $i++) { 
            for ($j=0; $j < $columnas; $j++) { 
                echo "*";
            }
            echo "<br>";
        }
    ?>
    <h2>Ej18</h2>
    <?php
        $filas=5;
        for ($i=0; $i < $filas; $i++) { 
            echo "*<br>";
        }
    ?>
    

    

    
</body>
</html>