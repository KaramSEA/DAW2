<?php  
require "./Libro.php";
$libro = new Libro('123456789', 'Mi libro', 200, 'Autor Ejemplo', 5);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
        <th>ISBN</th>
        <th>Título</th>
        <th>Número de páginas</th>
        <th>Autor</th>
        <th>Número de ejemplares</th>
    </tr>
    <tr>
        <td><?php echo $libro->getIsbn(); ?></td>
        <td><?php echo $libro->getTitle(); ?></td>
        <td><?php echo $libro->getNumPages(); ?></td>
        <td><?php echo $libro->getAutoria(); ?></td>
        <td><?php echo $libro->getNumEjemplares(); ?></td>
    </tr>
</table>
</body>
</html>