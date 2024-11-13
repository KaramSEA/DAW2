<?php 
session_start();

require_once "./funciones/funciones.php";
require_once "./clases/Publicacion.php";
require_once "./clases/Libro.php";
require_once "./clases/Revista.php";

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
            $isbnLibrosErr="Tienes que introducir el isbn";
            $erroresLibros=true;
        }

        $tituloLibros=securizar($_POST["tituloLibros"]);
        if (empty($tituloLibros)) {
            $tituloLibrosErr="Tienes que introducir el titulo";
            $erroresLibros=true;
        }
        $numPagLibros=securizar($_POST["numpaginasLibro"]);
        if (empty($numPagLibros)) {
            $numPagLibrosErr="Tienes que introducir el numero de paginas";
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
            
            if (!isset($_SESSION["libros"])) {
                $_SESSION["libros"] = [];
            }
            $_SESSION["libros"][] = new Libro($isbnLibros, $tituloLibros, $numPagLibros, $autoriaLibros);
            
            //Dirigimos al usuario nuevamente al index.php para que se reseteen los valores del formulario
            header("Location: index.php");
            exit();
        }

    }
    
    // Validar formulario de revistas
    if (isset( $_POST["revista"])) {
        $isbnRevistas=securizar($_POST["isbnRevista"]);
        if (empty($isbnRevistas)) {
            $isbnRevistasErr= "Tienes que introducir el isbn";
            $erroresRevista=true;
        }
        $tituloRevitas=securizar($_POST["tituloRevista"]);
        if (empty($tituloRevitas)) {
            $tituloRevitasErr= "Tienes que introducir el titulo";
            $erroresRevista=true;
        }
        $numPagRevistas=securizar($_POST["numpaginasRevista"]);
        if (empty($numPagRevistas)) {
            $numPagRevistasErr= "Tienes que introducir el numero de paginas de la revista";
            $erroresRevista=true;
        }
        $numPrestados=securizar($_POST["numPrestados"]);

        if (!$erroresRevista) {
            $_SESSION['isbnRevista']=$isbnRevistas;
            $_SESSION['tituloRevista']=$tituloRevitas;
            $_SESSION['numpaginasRevista']=$numPagRevistas;
            $_SESSION['numPrestados']=$numPrestados;
            
            
            $revistas[]=new Revista($isbnRevistas,$tituloRevitas,$numPagRevistas);
            $_SESSION["revistas"]=$revistas;
            //Dirigimos al usuario nuevamente al index.php para que se reseteen los valores del formulario
            header("Location: index.php");
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
    <link rel="stylesheet" href="./estilos/estilos.css">
</head>
<body>
    <?php include "./partes/menu.php"; ?>
    <form method="POST" action="<?php echo securizar($_SERVER["PHP_SELF"]); ?>">    
        <h1>Creación de libros</h1>
        
        <label for="isbnLibros">ISBN: *</label>
        <input type="text" name="isbnLibros" value="<?php echo $isbnLibros;?>"><br>
        <label class="errorCrea"><?php if(!empty($isbnLibrosErr)){echo $isbnLibrosErr;} ?></label><br>

        <label for="tituloLibros">Título: *</label>
        <input type="text" name="tituloLibros" value="<?php echo $tituloLibros;?>"><br>
        <label class="errorCrea"><?php if(!empty($tituloLibrosErr)){echo $tituloLibrosErr;} ?></label><br>
        

        <label for="numpaginasLibro">Número de páginas: *</label>
        <input type="number" name="numpaginasLibro" min="1" max="900" value="<?php echo $numPagLibros;?>"><br>
        <label class="errorCrea"><?php if(!empty($numPagLibrosErr)){echo $numPagLibrosErr;} ?></label><br>


        <label for="autoria">Autoria: *</label>
        <input type="text" name="autoria" value="<?php echo $autoriaLibros;?>"><br>
        <label class="errorCrea"><?php if(!empty($autoriaLibrosErr)){echo $autoriaLibrosErr;} ?></label><br>


        <label for="numEjemplares">Número de ejemplares: *</label>
        <input type="number" name="numEjemplares" min="1" value="<?php echo $numEjemplares;?>"><br>
        

        <input type="hidden" name="libro" value="1">
        <input type="submit" name="enviar" value="Enviar">
        <input type="reset" value="Resetear"><br>
    </form>
    <?php echo var_dump($_SESSION["libros"])?>
    <table border="1">
        <tr>
            <th>ISBN:</th>
            <th>titulo</th>
            <th>numero de paginas</th>
            <th>autoria</th>
            <th>numEjemplares</th>
        </tr>
        <?php
    if (isset($_SESSION["libros"]) && is_array($_SESSION["libros"])) {
        foreach ($_SESSION["libros"] as $libro) {
            
            echo "<tr>";
            echo "<td>" . $libro->getIsbn();echo "</td>";
            echo "<td>" . $libro->getTitulo(); echo "</td>";
            echo "<td>" . $libro->getNumPaginas(); echo "</td>";
            echo "<td>" . $libro->getAutoria(); echo "</td>";
            echo "<td>" . $libro->getNumEjemplares(); echo "</td>";
            echo "</tr>";
        }
    }
    ?>
    </table>

    <form method="POST" action="<?php echo securizar($_SERVER["PHP_SELF"]); ?>">    
        <h1>Creación de revistas</h1>
        
        <label for="isbnRevista">ISBN: *</label>
        <input type="text" name="isbnRevista" value="<?php echo $isbnRevistas;?>">
        <label class="errorCrea"><?php if(!empty($isbnRevistasErr)){echo $isbnRevistasErr;} ?></label><br>


        <label for="tituloRevista">Título: *</label>
        <input type="text" name="tituloRevista" value="<?php echo $tituloRevitas;?>"><br>
        <label class="errorCrea"><?php if(!empty($tituloRevitasErr)){echo $tituloRevitasErr;} ?></label><br>


        <label for="numpaginasRevista">Número de páginas: *</label>
        <input type="number" name="numpaginasRevista" min="1" max="900" value="<?php echo $numPagRevistas;  ?>">
        <label class="errorCrea"><?php if(!empty($numPagRevistasErr)){echo $numPagRevistasErr;} ?></label><br>


        <label for="numPrestados">Número de revistas prestadas: *</label>
        <input type="number" name="numPrestados" value="0"><br>

        <input type="hidden" name="revista" value="1">
        <input type="submit" name="enviar" value="Enviar">
        <input type="reset" value="Resetear"><br>
    </form>
    <?php include "./partes/pie.php"; ?>
</body>
</html>