<?php
session_start();
require "./funciones/funciones.php";

$email = $contraseña1 = $contraseña2 = $nacimiento = $bibliotecaFav = "";

$emailErr = $contraseña1Err = $contraseña2Err = $nacimientoErr = $notEqualsErr = $bibliotecaFavErr = "";

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
    $contraseña2=securizar($_POST['pass2']);
    if (empty($contraseña2)) {
        $contraseña2Err= 'Tienes que repetir la contraseña';
        $errores=true;
    }
    if ($contraseña1!=$contraseña2) {
        $notEqualsErr='Las contraseñas no coinciden';
        $errores=true;
    }
    $nacimiento = securizar($_POST['birthay']);
    $bibliotecaFav = securizar($_POST['biblioteca']);
    
    if (!$errores) {
        $_SESSION['email']=$email;
        $_SESSION['pass1']=$contraseña1;
        $_SESSION['pass2']=$contraseña2;
        $_SESSION['birthay']=$nacimiento;
        $_SESSION['biblioteca']=$bibliotecaFav;
        
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
    <title>Document</title>
</head>
<body>
    <?php include "./partes/menu.php"?>
    <form method="POST" action="<?php echo securizar($_SERVER["PHP_SELF"]); ?>">    
        <label>Email: *</label>
        <input type="email" name="email"><label><?php if(!empty($emailErr)){echo $emailErr;};?></label><br>
        <label>Contraseña: *</label>
        <input type="password" name="pass1"><?php if(!empty($contraseña1Err)){echo $contraseña1Err;};?><br>
        <label>Repite la contraseña: *</label>
        <input type="password" name="pass2"><?php if(!empty($contraseña2Err)){echo $contraseña2Err;};?><?php if(!empty($notEqualsErr)){echo $notEqualsErr;};?><br>
        
        <label>Fecha de nacimiento:</label>
        <input type="date" name="birthay"><br>
        <label>Biblioteca favorita:</label>
        <select name="biblioteca">
            <option value="parla">Parla</option>
            <option value="getafe">Getafe</option>
            <option value="leganes">Leganes</option>
            <option value="fuenlabrada">Fuenlabrada</option>
        </select><br>
        <input type="submit" name="enviar" value="Envío">
        <input type="reset"><br>
    
    </form>
    <?php include"./partes/pie.php"?>
    
</body>
</html>