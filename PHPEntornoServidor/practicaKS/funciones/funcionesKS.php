<?php
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

function sumarNegativos(...$numeros){
    $sumatorio=0;
    foreach ($numeros as $value) {
       if ($value<0) {
            $sumatorio=$sumatorio+$value;
       }
    }
    return $sumatorio;

}
function describirPersona($array){
    if ($array["matricula"]) {
        $tieneMatricula="si";
    }else {
        $tieneMatricula="no";
    }
    return $array["nombre"]." tiene ".$array["edad"]." y $tieneMatricula tiene matricula";
}
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
//nuestra funcion se basa en calcular el temperatura media de una ciudad segun los valores(temperaturas) que nos pasen en el array.
// si no se encuentra esa ciudad se nos devolvera un null 
function calcularTemperaturaMediaCiudad($nombreCiudad, $array){
       
    foreach ($array as $key => $valores) {
        if ($key==$nombreCiudad) {
            return array_sum($array[$nombreCiudad])/ count($array[$nombreCiudad]);
        }
    }
    return null;

}