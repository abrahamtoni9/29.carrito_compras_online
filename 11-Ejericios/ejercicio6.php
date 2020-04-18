<?php


//Mostrar en una tabla HTML la tabla de multiplicacion

echo "<table border = '1'><tr>";//inicio de la table

echo "<tr>"; //inicio fila 1 de celdas

    for ($cabecera=0; $cabecera <= 10 ; $cabecera++) { 
        echo "<td>Tabla del $cabecera</td>";
    }

echo "</tr>"; //cierre de fila 1 de celdas

echo "<tr>"; //inicio fila 2 de celdas

    for ($i=0; $i <= 10 ; $i++) { 
        echo "<td>";
            for ($x=0; $x <=10 ; $x++) { 
                echo "$i x $x : ".($i*$x)."<br>";
            }
        echo "</td>";
    }

echo "</tr>"; //cierre de fila 2 de celdas


echo "</table>";//fin de la tabla
?>