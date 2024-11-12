<?php
session_start();
require "./funciones/funciones.php";

$email = $contraseña1 = "";

$emailErr = $contraseña1Err = "";

$errores=false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email=securizar($_POST['email']);
    if (empty($email)) {
        $emailErr='El email es un campo obligatorio';
        $errores=true;
    }
    $contraseña1=securizar($_POST['pass1']);
    if (empty($contraseña1)) {
        $contraseña1Err= 'La contraseña es un campo obligatorio';
        $errores=true;
    }
    
    
    if (!$errores) {
        $_SESSION['email']=$email;
        $_SESSION['pass1']=$contraseña1;
       
        header("Location: index.php");

        exit();
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="./estilos/estilos.css">
</head>
<body>
    <?php include "./partes/menu.php"?>
    
    <form method="POST" action="<?php echo securizar($_SERVER["PHP_SELF"]); ?>">    
        <h1>Inicio de sesion</h1>
        
        <label for="email">Email: *</label>
        <input type="email" id="email" name="email">
        <label class="error"><?php if(!empty($emailErr)){echo $emailErr;} ?></label><br>

        <label for="pass1">Contraseña: *</label>
        <input type="password" id="pass1" name="pass1">
        <label class="error"><?php if(!empty($contraseña1Err)){echo $contraseña1Err;} ?></label><br>

        <input type="submit" name="enviar" value="Enviar">
        <input type="reset" value="Resetear"><br>
    </form>

    <?php include "./partes/pie.php"?>
</body>
</html>