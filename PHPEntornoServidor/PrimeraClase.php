<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php echo "aaa"; ?>
    </p>
    <?php
        echo "otro echo<br>";
        print "print";
    ?>   
    <h2>Variables</h2>
    <?php
        $numero=3;
        echo $numero;
        echo gettype($numero);
        echo"<br>";
        
        $numero="hola";
        echo $numero;
        echo gettype($numero);
        echo "<br>";
        //PHP es sensitivo es decir que diferencia entre mayusculas y minsculas 
        $a=9;
        $b=12;
        $resultado=$a+$b; //operacion de la suma
        echo $a. "+" .$b . "=". $resultado;  //imprimiendo el resultado
        echo "<br>";

        define("PI",35584);
        const saludonoche="buenas novhes";
        echo saludonoche;
        echo "<br>";
        echo PI;
        echo "<br>";
        echo PHP_VERSION;
        echo "<br>";
        echo __LINE__;
    ?>
</body>
</html>