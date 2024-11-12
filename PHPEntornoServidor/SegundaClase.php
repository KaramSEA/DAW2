<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>Operaciones</h2>
    <?php
        echo "<h3>Operaciones aritméticas</h3>";
        $a =4;
        $b=5;
        $resultado=$a+$b;
        echo "La suma de " .$a . " + ". $b . " es ".$resultado."<br>";
        echo "La suma de $a + $b es $resultado"."<br>";

        $potencia =$a ** $b ;
        echo $potencia."<br>";
        echo ++$a;
    ?>
    <h2>Operadores de comparacion</h2>
    <?php
        $x=2;
        $y=2;
        $comparacion= $x==$y;
        echo $comparacion."<br>";
        echo gettype($comparacion);
        $a="juan";
        $b="juan";
        echo ($a == $b)."us";
        

        $x=2;
        $y=2;
        $comparacion = $x == $y;
        echo $comparacion;
    ?>
    <h2>Condicionales</h2>
    <?php
        $edad=2;
        if($edad>18){
            echo "mayor";
        } else if ($edad>=12){
            echo "adolescente";
        } else if ($edad>=5){
            echo "niño";
        }else{
            echo "bebe";
        };
    ?>
    <h2>Swich</h2>
    <?php
        $num="cero";
        switch($num){
            case "cero": echo "cero";
            break;
            case 1: echo "uno";
            break;
            case 2: echo "dos";
            break;
            default :echo "Nada";
        }

    
    ?>
    <h2> prueba</h2>
    <?php
        $num1=6;
        switch($num1){
            case 1: echo "menor";
            break;
            case 2: echo "menor";
            break;
            case 3: echo "menor";
            break;
            default : echo "nada";
        }
    ?>
    <h2>bucles</h2>
    <?php
        for ($i=0; $i <= 5; $i++) { 
            echo $i."<br>";
        }
        $a=0;
        while ($a <= 5) {
            echo $a.",";
            $a++;
        }
        echo "<br>";
        $f=0;
        do {
            echo $f."---";
            $f++;
        } while ($f <= 8);
    ?>

</body>
</html>