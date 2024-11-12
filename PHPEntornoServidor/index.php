<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once "./U4/clases/Poligono.php";
        require_once "./U4/clases/TrianguloEquilatero.php";
        require_once "./U4/Prue.php";
        $t1=new TrianguloEquilatero(4,5);
        var_dump($t1->calcularArea());
        var_dump($t1->calcularPerimetro());
        $p = new Prue();





        function calcularMedias($klk){
            //para sumar los valores de un array utilizo array_sum (vista en php.net) para posteriorimente dividirlo entre las notas y asi calcular la media 
            $resultadoFinal=[];
            foreach ($klk as $nombres => $valores) {
                if (count($valores)==0) {
                    $resultadoFinal[$nombres]=false;
                }else {
                    $resultadoFinal[$nombres]=array_sum($valores)/count($valores);
                }
            }
            return $resultadoFinal;
        }
    ?>
</body>
</html>