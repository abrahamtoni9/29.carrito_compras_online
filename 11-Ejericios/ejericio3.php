<?php

//2. Escribir un programa que imprima por pantalla los cuadrados*(un numero multiplicado por si mismo)
//de los primeros 40 numeros naturales
//PD.: utilizar el bucle while

$contador = 0;
// $cuadrador = 0;
// while($contador <= 40)
// {
//     $cuadrado  = $contador * $contador;
//     echo "<h3>El cuadrado de $contador es : $cuadrado<h3>";
//     $contador++;
// }

for ($contador=0; $contador <= 40 ; $contador++) { 
    $cuadrado  = $contador * $contador;
    echo "<h3>El cuadrado de $contador es : $cuadrado<h3>";
}

?>