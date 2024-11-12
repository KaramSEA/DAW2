<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="./formulario.php"> 
        <label>Nombre</label>
        <input type="text" name="name"> <br>
        <input type="submit" name="enviar" value="Envio">
        <input type="reset">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        echo "He llegado atraves del formulario";
        var_dump($_POST);
        var_dump($_GET);
        echo "<p>El nombre intoducido es {$_POST['name']}</p>";
    }
    else {
        echo "<h2>Privera vista</h2>";
    }
    
    ?>
</body>
</html>