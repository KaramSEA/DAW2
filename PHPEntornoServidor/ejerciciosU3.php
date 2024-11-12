<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h5>Ej1</h5>";
        $numerosAleatoios=[];

        for ($i=0; $i < 20; $i++) { 
            $numerosAleatoios[$i]=rand(10,50);
        }
        foreach($numerosAleatoios as $numero){
            echo $numero."<br>";
        }

        echo "<h5>Ej2</h5>";
        $sumatorio=0;
        foreach ($numerosAleatoios as $numeroo) {
            $sumatorio+=$numeroo;
        }
        echo $sumatorio."<br>";
        $media=$sumatorio/20;
        echo "la media es $media <br>";

        $maxnum=PHP_INT_MIN;
        $minnum=PHP_INT_MAX;
        foreach ($numerosAleatoios as $number) {
            if ($number>$maxnum) {
                $maxnum=$number;
            }
            if ($number<$minnum) {
                $minnum=$number;
            }
        }
        echo "el numero mas grande es $maxnum<br>";
        echo "el numero mas pequeño es $minnum";

        echo "<h2>Ej3</h2>";
        $nombres=["karam"=>1.54, "manuel"=>1.65, "rafa"=>1.23, "cristina"=>1.98,"lolo"=>1.75];
        $sumanumeros=0;
        foreach ($nombres as $valor) {
            $sumanumeros+=$valor;
        }
        $medianum=$sumanumeros/5;
        echo"<table border=auto>
                <tr>
                    <th>Nombre</th>
                    <th>Altura</th>    
                </tr>";
                foreach ($nombres as $key => $value) {
                    echo"<tr>
                            <td>$key</td>
                            <td>$value</td>
                        </tr>";
                }
                echo"<tr>
                    <td>media</td>
                    <td>$medianum</td>
                </tr>
                
        </table>";
        
        echo "<h2>Ej4</h2>";
        $numeros=[];
        $cuadrado=[];
        $cubo=[];
        
        echo "<h2>Ej5</h2>";
        $alumnado=["moha", "karam","peter","loolo"];
        $notas=[4.65,4.9,5.9,9.4];
        $aprobaos=["no","no","si","si"];
        for ($i=0; $i < 4; $i++) { 
            echo "<ul>$alumnado[$i] tiene un $notas[$i] y $aprobaos[$i] esta aprovado</ul>";
        }
        echo"<h2>Ej6</h2>";
        $mesesano=["enero"=>14.8,"febrero"=>19,"marzo"=>25.2,"abril"=>30.9,"mayo"=>29.1,"junio"=>37,"julio"=>38.7,"agosto"=>40,"septiembre"=>31.6,
        "octubre"=>30.1,"noviembre"=>18.6,"diciembre"=>13.1];
        
            echo"
                <table border=auto>
                    <tr>";
                    foreach ($mesesano as $key => $value) {
                        echo "<td>$key</td>";
                    };

                    echo"
                    </tr>
                    <tr>";
                    foreach ($mesesano as $key => $value) {
                        echo "<td>$value</td>";
                    };
                    echo"
                    </tr>
                </table>
            ";
        

        echo "<h2>Ej7</h2>";
        echo "<table border=1>";
        foreach ($mesesano as $key => $value) {
            echo"
                
                    <tr>
                        <td>$key</td>
                        <td>";
                        for ($i=0; $i <$value; $i++) { 
                        echo "";
                        };
                    echo "</td>";
        };
        echo "</tr>
        </table>";

        echo "<h2>Ej8</h2>";
        echo "<table border=1>";
        foreach ($mesesano as $key => $value) {
            echo"
                    <tr>
                        
                    </tr>
                    <tr>
                        <td>$key</td>
                        <td>";
                        for ($i=0; $i <$value; $i++) { 
                        echo "";
                        };
                    echo "</td>";
        };
        echo "</tr>
        </table>";
        $mesesano=["enero"=>[14.8,5.6],"febrero"=>[19,0.2],"marzo"=>[25.2,1.4],"abril"=>[30.9,4.5],"mayo"=>[29.1,2.9],"junio"=>[37,5],"julio"=>[38.7,5.8],"agosto"=>[40,14.5],
        "septiembre"=>31.6,"octubre"=>30.1,"noviembre"=>18.6,"diciembre"=>13.1];


        echo "<h2>Ej9</h2>";
        $numeros=[["as",1],
                ["dos",0],
                ["tres",10],
                ["cuatro",0],
                ["cinco",0],
                ["seis",0],
                ["siete",0],
                ["ocho",0],
                ["nueve",0],
                ["sotas",2],
                ["caballos",3],
                ["reyes",4],
        ];
        $palos=[
            "oros","bastos","espadas","copas"
        ];
        for ($i=0; $i < 10; $i++) { 
            $numerosAleatoios[$i]=rand(0,10);
        }
        foreach ($numeros as $key => $value) {
            
        }



    ?>
</body>
</html>