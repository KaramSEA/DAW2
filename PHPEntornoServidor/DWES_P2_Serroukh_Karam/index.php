<?php 
session_start();
require "./funciones/funciones.php";
require "./clases/Libro.php";



$isbnLibros = $tituloLibros = $numPagLibros = $autoriaLibros = $numEjemplares= "";
$isbnLibrosErr = $tituloLibrosErr = $numPagLibrosErr = $autoriaLibrosErr = $numEjemplaresErr= "";

$erroresLibros=false;

$isbnRevistas = $tituloRevitas = $numPagRevistas = $numPrestados = "";
$isbnRevistasErr = $tituloRevitasErr = $numPagRevistasErr = $numPrestadosErr = "";

$erroresRevista=false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Validar formulario de libros
    if (isset($_POST['libro'])) {
        $isbnLibros=securizar($_POST["isbnLibros"]);
        if (empty($isbnLibros)) {
            $isbnLibrosErr="Tiene que introducir el isbn";
            $erroresLibros=true;
        }

        $tituloLibros=securizar($_POST["tituloLibros"]);
        if (empty($tituloLibros)) {
            $tituloLibrosErr="Tiene que introducir el titulo";
            $erroresLibros=true;
        }
        $numPagLibros=securizar($_POST["numpaginasLibro"]);
        if (empty($numPagLibros)) {
            $numPagLibrosErr="Tiene que introducir el numero de paginas";
            $erroresLibros=true;
        }
        $autoriaLibros=securizar($_POST["autoria"]);
        if (empty($autoriaLibros)) {
            $autoriaLibrosErr= "Tienes que introducir la autoria";
            $erroresLibros=true;
        }
        $numEjemplares=securizar($_POST["numEjemplares"]);
        if (!$erroresLibros) {
            $_SESSION['isbnLibros']=$isbnLibros;
            $_SESSION['tituloLibros']=$tituloLibros;
            $_SESSION['numpaginasLibro']=$numPagLibros;
            $_SESSION['autoria']=$autoriaLibros;
            $_SESSION['numEjemplares']=$numEjemplares;
            
            $nuevoLibro= new Libro($isbnLibros,$tituloLibros,$numPagLibros,$autoriaLibros);
    
            exit();
        }

    }
    
    // Validar formulario de revistas
    if (isset( $_POST["revista"])) {
        $isbnRevistas=securizar($_POST["isbnRevista"]);
        if (empty($isbnRevistas)) {
            $isbnRevistasErr= "Tiene que introducir el isbn";
            $erroresRevista=true;
        }
        $tituloRevitas=securizar($_POST["tituloRevista"]);
        if (empty($tituloRevitas)) {
            $tituloRevitasErr= "Tiene que introducir el titulo";
            $erroresRevista=true;
        }
        $numPagRevistas=securizar($_POST["numpaginasRevista"]);
        if (empty($numPagRevistas)) {
            $numPagRevistasErr= "Tiene que introducir el numero de paginas de la revista";
            $erroresRevista=true;
        }
        $numPrestados=securizar($_POST["numPrestados"]);

        if (!$erroresRevista) {
            $_SESSION['isbnRevista']=$isbnRevistas;
            $_SESSION['tituloRevista']=$tituloRevitas;
            $_SESSION['numpaginasRevista']=$numPagRevistas;
            $_SESSION['numPrestados']=$numPrestados;
            
            
            $nuevaRevista=new Revista($isbnRevistas,$tituloRevitas,$numPagRevistas);
    
            exit();
        }
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
    <?php include "./partes/menu.php"; ?>
    <form method="POST" action="<?php echo securizar($_SERVER["PHP_SELF"]); ?>">    
        <h1>Creación de libros</h1>
        
        <label for="isbnLibros">ISBN: *</label>
        <input type="text" name="isbnLibros" value="<?php echo $isbnLibros;?>">
        <label class="error"><?php if(!empty($isbnLibrosErr)){echo $isbnLibrosErr;} ?></label><br>

        <label for="tituloLibros">Título: *</label>
        <input type="text" name="tituloLibros" value="<?php echo $tituloLibros;?>">
        <label class="error"><?php if(!empty($tituloLibrosErr)){echo $tituloLibrosErr;} ?></label><br>
        

        <label for="numpaginasLibro">Número de páginas: *</label>
        <input type="number" name="numpaginasLibro" min="1" max="900" value="<?php echo $numPagLibros;?>">
        <label class="error"><?php if(!empty($numPagLibrosErr)){echo $numPagLibrosErr;} ?></label><br>


        <label for="autoria">Autoía: *</label>
        <input type="text" name="autoria" value="<?php echo $autoriaLibros;?>">
        <label class="error"><?php if(!empty($autoriaLibrosErr)){echo $autoriaLibrosErr;} ?></label><br>


        <label for="numEjemplares">Número de ejemplares: *</label>
        <input type="number" name="numEjemplares" min="1" value="<?php echo $numEjemplares;?>">
        

        <input type="hidden" name="libro" value="1">
        <input type="submit" name="enviar" value="Enviar">
        <input type="reset" value="Resetear"><br>
    </form>
    

    <form method="POST" action="<?php echo securizar($_SERVER["PHP_SELF"]); ?>">    
        <h1>Creación de revistas</h1>
        
        <label for="isbnRevista">ISBN: *</label>
        <input type="text" name="isbnRevista" value="<?php echo $isbnRevistas;?>">
        <label class="error"><?php if(!empty($isbnRevistasErr)){echo $isbnRevistasErr;} ?></label><br>


        <label for="tituloRevista">Título: *</label>
        <input type="text" name="tituloRevista" value="<?php echo $tituloRevitas;?>">
        <label class="error"><?php if(!empty($tituloRevitasErr)){echo $tituloRevitasErr;} ?></label><br>


        <label for="numpaginasRevista">Número de páginas: *</label>
        <input type="number" name="numpaginasRevista" min="1" max="900" value="<?php echo $numPagRevistas;  ?>">
        <label class="error"><?php if(!empty($numPagRevistasErr)){echo $numPagRevistasErr;} ?></label><br>


        <label for="numPrestados">Número de revistas prestadas: *</label>
        <input type="number" name="numPrestados" value="<?php echo $numPrestados;?>"><br>

        <input type="hidden" name="revista" value="1">
        <input type="submit" name="enviar" value="Enviar">
        <input type="reset" value="Resetear"><br>
    </form>
    <?php include "./partes/pie.php"; ?>
</body>
</html>