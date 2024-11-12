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
    <title>Formulario</title>
    <link rel="stylesheet" href="./estilos/estilos.css">
</head>
<body>
    <?php include "./partes/menu.php"?>
    
    <form method="POST" action="<?php echo securizar($_SERVER["PHP_SELF"]); ?>">    
        <h1>Registro</h1>
        
        <label for="email">Email: *</label>
        <input type="email" id="email" name="email" value="<?php if(empty($emailErr)){echo $email;}?>">
        <label class="error"><?php if(!empty($emailErr)){echo $emailErr;} ?></label><br>

        <label for="pass1">Contraseña: *</label>
        <input type="password" id="pass1" name="pass1">
        <label class="error"><?php if(!empty($contraseña1Err)){echo $contraseña1Err;} ?></label><br>

        <label for="pass2">Repite la contraseña: *</label>
        <input type="password" id="pass2" name="pass2">
        <label class="error"><?php if(!empty($contraseña2Err)){echo $contraseña2Err;} ?></label>
        <label class="error"><?php if(!empty($notEqualsErr)){echo $notEqualsErr;} ?></label><br>

        <label for="birthay">Fecha de nacimiento:</label>
        <input type="date" id="birthay" name="birthay" value="<?php if(!empty($nacimiento)){echo $nacimiento;};?>"><br>

        <label for="biblioteca">Biblioteca favorita:</label>
        <select id="biblioteca" name="biblioteca">
            <option value="parla" <?php echo ($bibliotecaFav === 'parla') ? 'selected' : ''; ?>>Parla</option>
            <option value="getafe" <?php echo ($bibliotecaFav === 'getafe') ? 'selected' : ''; ?>>Getafe</option>
            <option value="leganes" <?php echo ($bibliotecaFav === 'leganes') ? 'selected' : ''; ?>>Leganés</option>
            <option value="fuenlabrada" <?php echo ($bibliotecaFav === 'fuenlabrada') ? 'selected' : ''; ?>>Fuenlabrada</option>
        </select><br>

        <input type="submit" name="enviar" value="Enviar">
        <input type="reset" value="Resetear"><br>
    </form>

    <?php include "./partes/pie.php"?>
</body>
</html>
