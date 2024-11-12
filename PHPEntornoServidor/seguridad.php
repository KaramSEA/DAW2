<?php
function securize($datos){
    $datos=trim($datos);
    $datos=stripslashes($datos);
    $datos=htmlspecialchars($datos);
    return $datos;
}


?>