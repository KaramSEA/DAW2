<?php
$libros = [
    'libro1' => [
    'titulo' => 'la mala costumbre',
    'autoria' => 'alana s. portero',
    'ano' => 2023
    ],
    'libro2' => [
    'titulo' => 'lo que hay',
    'autoria' => 'sara torres',
    'ano' => 2022
    ],
    'libro3' => [
    'titulo' => 'las malas',
    'autoria' => 'camila sosa villada',
    'ano' => 2019
    ]
];
$librosConPaginas = [
    'libro1' => [
    'titulo' => 'la mala costumbre',
    'autoria' => 'alana s. portero',
    'ano' => 2023,
    'paginas'=>240
    ],
    'libro2' => [
    'titulo' => 'lo que hay',
    'autoria' => 'sara torres',
    'ano' => 2022
    ],
    'libro3' => [
    'titulo' => 'las malas',
    'autoria' => 'camila sosa villada',
    'ano' => 2019,
    'paginas'=>256
    ]
];
//he encontrado una funcion de php en google que convierte el primer carater de una frase en mayucula, esta funcion se llama ucfirst()
function formatear($string, $boolean){
    if ($boolean==true) {
        return ucwords($string);
    }else {
        return ucwords($string);
    }
}
function antiguedad($number){
    $anoActual = date("Y");
    return $anoActual-$number;

} 

function imprimirLibrosConPaginas($array){
    foreach ($array as $nombreLibros => $caracteristicasLibros) {
        if (array_key_exists('paginas', $caracteristicasLibros)) {
            echo "El libro ".$caracteristicasLibros['titulo']." tiene ".$caracteristicasLibros['paginas']. " paginas <br>";
        }else{
            echo "El libro ".$caracteristicasLibros['titulo']." no estan definidas sus paginas <br>";
        }
    }
}