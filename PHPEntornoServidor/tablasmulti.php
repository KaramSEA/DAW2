<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
<?php
        $number=7;
        echo"
        <table>
            <tr>
                <th>X</th>";
                for ($i=0; $i < 10; $i++) { 
                    echo "<th>$i</th>";
                };"

            </tr>";
            for ($j=0; $j < 10; $j++) { 
                echo "
                <tr>
                    <th>$j</th>
                    "; 
                    for ($o=0; $o < 10; $o++) { 
                        
                        echo "<td>".($o*$j)."</td>";
                    }
                "</tr>";
            }
        "</table>   
        ";
    ?>
</body>
</html>