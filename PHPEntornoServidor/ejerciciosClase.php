<?php

session_start();
require "./seguridad.php";

$nombre = $pass1 = $pass2 = $aceptado = "";

$nombreErr = $pass1Err = $pass2Err = $notEqualsErr = $acceptErr = "";

$errores = false;

require "./seguridad.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    var_dump($_POST);

    $nombre=securize($_POST['name']);
    if (empty($nombre)) {
        $nombreErr="El nombre es un campo obligatorio";
        $errores=true;
    }

    $pass1=securize($_POST['pass1']);
    if (empty($pass1)) {
        $pass1Err="Tienes que introducir una contresaña";
        $errores=true;
    } 

    $pass2=securize($_POST['pass2']);
    if (empty($pass2)) {
        $pass2Err="Tienes que repetir la contresaña";
        $errores=true;
    } 

    if ($pass1!=$pass2) {
        $notEqualsErr="Las contreseñas no son iguales";
    }

    if (isset($_POST["accept"])) {
        $aceptado = $_POST["accept"];
    }

    //si se ha verificado el formulario, abro sesion y me voy a index
    if (!$errores) {
        $_SESSION["name"]=$nombre;
        $_SESSION["pass1"]=$pass1;
        $_SESSION["pass2"]=$pass2;
        $_SESSION["public"]=$publico;
        //redirijo a otra pagina, 
        header("Location: ./indexComentarios.php");
        //termino la ejecucion de este script
        exit();
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">        
        <label>Nombre: *</label>
        <input
            type="text"
            name="name"
            value="<?php echo $nombre; ?>"
            class="<?php echo empty($nombreErr) ? "" : "err"; ?>">
        <?php
        if (!empty($nombreErr)) {
            echo "<label class='error'>$nombreErr</label>";
        }
        ?><br>
        <label>Contraseña: *</label>
        <input type="password" name="pass1">
        <?php if (!empty($pass1Err)) {
            echo "<label class='error'>$pass1Err</label>";
        }?><br>
        <label>Repite la contraseña: *</label>
        <input type="password" name="pass2">
        <?php if (!empty($pass2Err)) {
            echo "<label class='error'>$pass2Err</label>";
        }?><br>
        <label for="age">Grupo de edad:</label>
        <select name="age">
            <option value="under">Menor de edad</option>
            <option value="adulto"  >Entre 18 y 65</option>
            <option value="anciano">Mayor de 65</option>
        </select><br>
        <input type="checkbox" name="accept"><?php if (empty($aceptado)){ echo "<label class='error'>Debes aceptar las condiciones</label>"; }?>Acepto las condiciones de uso <br>
        <input type="submit" name="enviar" value="Envío">
        <input type="reset"><br>
        <?php if (!empty($notEqualsErr)) {
            echo "<label class='error'>$notEqualsErr</label>";
        }?>

    </form>
</body>
</html>