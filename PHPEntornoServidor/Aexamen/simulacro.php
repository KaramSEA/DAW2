<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejer1</h1>

    <h4>1.1</h4>
    <?php
        $numeros=[
            1=> "uno",
            2=> "dos",
            3=> "tres",
            4=> "cuatro",
            5=> "cinco",
            6=> "seis",
        ];
        foreach ($numeros as $clave => $valor) {
            if ($clave%2== 0) {
                echo "".$clave."".$valor."  ";
            }
        }
    ?>
    <h4>1.2</h4>
    <?php
        include "./funciones/functs.php";
        $div1= dividir(5,3);
        echo $div1."<br>";
        $div2= dividir(5);
        echo $div2;
    ?>
    <h4>1.3</h4>
    <?php
        $hola=concatenar("lolo","polla");
        echo $hola."<br>";
    ?>
    <h4>1.4</h4>
    <?php
        $profes = ["DAW" => [
            "Sete" => ["DWES"],
            "Manuel" => ["DWEC", "SSII"],
            "Santi" => ["FOL", "EIE"]]
        ];

        foreach ($profes as $modulo => $nombresYasinaturas) {
            foreach ($nombresYasinaturas as $nombreProfe => $asignaturas) {
                echo "$nombreProfe imparte ";
                foreach ($asignaturas as $asignatura) {
                    echo $asignatura." ";
                }
                echo "<br>";
            }
        }
    ?>
    <h1>Ejerecicio2</h1>
    <?php
        include "./clases/Platos.php";
        include "./clases/Principal.php";
        include "./clases/Postre.php";

        $newPrincipal=new Principal("macarrones", 1.4,true);
        $newPostre=new Postre("helado", 1.8, 56);

        echo"
        <table border=1>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Con gluten</th>
            </tr>
            <tr>
                <td>". $newPrincipal->getNombre() ." </td>
                <td>". $newPrincipal->getPrecio() ." </td>"; 
                if($newPrincipal->getNombre()==true){echo "<td>Si</td>";}else{echo"<td>No</td>";};echo"   
            </tr>
        </table>
        ";

    ?>
    <h1>Ejercicio3</h1>
</body>
</html>