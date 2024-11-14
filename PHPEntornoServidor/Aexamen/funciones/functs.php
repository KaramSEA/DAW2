<?php
function dividir($num1, $num2=1) {
    if ($num2==0) {
        return false;
    }else {
        return $num1/$num2;
    }
}
function concatenar(...$valores){
    foreach ($valores as $value) {
        echo $value;
    }
}