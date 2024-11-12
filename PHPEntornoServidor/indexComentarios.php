<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aqui tu comentario</title>
</head>
<body>
    <?php
    session_start();
    var_dump($_SESSION);
    if ($_SESSION["puclic"]) {
        echo "<p>SI";
    }else {
        echo "<p>NO";
    }
    echo "quieres que sea publico </p>"

    ?>
</body>
</html>