<?php
include "./codigoSeguro.php";

$nombre=$numero=$tipo="";
$nombreErr=$numeroErr=$tipoErr="";
$errores=false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre=securizar($_POST['nombre']);
    if(empty($nombre) || strlen($nombre)<4){
        $nombreErr="No puede estar vacio ni tener menos de 4 caracteres";
        $errores=true;
    }
    $numero=securizar($_POST["numero"]);
    if(empty($numero) || strlen($numero)< 4){
        $numeroErr= "No puede estar vacio ni tener menos de 4 caracteres";
        $errores=true;
    }


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo securizar($_SERVER["PHP_SELF"]); ?>">    
        
        <label for="nombre">Nombre: *</label>
        <input type="text" name="nombre" value="<?php if(empty($nombreErr)){echo $nombre;}?>">
        <label class="error"><?php if(!empty($numeroErr)){echo $numeroErr;}?></label><br>

        <label for="numero" value="<?php if(empty($numeroErr)){echo $numeroErr;}?>">Numero: *</label>
        <input type="tel" name="numero">
        <label class="error"><?php echo $numeroErr?></label><br><br>

        <label for="Personal">Personal:<input type="radio" name="Personal" id="personal"></label>
        <label for="Trabajo">Trabajo:<input type="radio" name="Trabajo" id="trabajo"></label>
        <label for="">Otros:<input type="radio" name="Otros" id="otros"></label>
        
        <input type="submit" name="enviar" value="Enviar">
        <input type="reset" value="Resetear"><br>
        

    </form>
</body>
</html>