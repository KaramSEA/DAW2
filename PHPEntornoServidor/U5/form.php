<?php
//variables en las que guardo los valores indtroducidos
$nombre=$pass=$fecha=$genero="";

//variables en la que guardo el mensaje de error
$nombreErr=$passErr=$fechaErr=$generoErr="";

//variable boolean qu verifica si no ha hbaido errores:
$errores=false;

if ($_SERVER['REQUEST_METHOD']=="POST") {

    //aqui es donde voy a hacer la validacion de datos
    
    //valido nombre:
    $nombre=$_POST["nombre"];
    if (empty($nombre)) {
        $nombreErr="El nombre es obligatorio";
        $errores==true;
    }

    $pass=$_POST["pass"];
    if (empty($pass)) {
        $passErr="La contraseña es obligatorio";
        $errores==true;
    }

    $nacimineto=$_POST["nacimiento"];
    if (empty($fecha)) {
        $fechaErr="Las es obligatorio esta obligatorio";
        $errores==true;
    }
    $genero=$_POST["genero"];
    //si esta todo bien validado me voy a home.php
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
    <?php
    var_dump($_SERVER)
    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
        <label>Nombre y apellidos: *</label>
        <input type="text" name="nombre" value="<?php echo $nombre?>">
        <span class="error"><?php echo $nombreErr;?></span>
        <br>
        <label>Contraseña: *</label>
        <input type="password" name="pass">
        <span class="error"><?php echo $passErr;?></span><br>
        <label>Fecha de nacimineto: *</label>
        <input type="date" name="nacimiento"><br>
        <label>Género: </label><br>
        <input type="radio" name="genero" value="mujer" <?php ?>>Mujer <br>
        <input type="radio" name="genero" value="hombre" checked>Hombre <br>
        <input type="submit" name="enviar">
    </form>
    <!--si el formulario se ha rellenado correctamente, que me imprima los datos-->
    <!--simulo home.php-->
    <?php
    if (!$errores) {
        echo "<h2>esos son tus datos</h2>";
        echo "<p>tu nombre es $nombre tu contraseña es $pass,
        has nacido en el $fecha y tu genero es $genero</p>";
    }
    ?>
</body>
</html>