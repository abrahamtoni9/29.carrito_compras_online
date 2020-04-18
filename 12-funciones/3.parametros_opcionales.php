<?php

function calculadora ($numero1, $numero2, $negrito = false)
{
    //conjunto de instruccciones a ejecutar

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;


    if ($negrito) {
        ECHO "<H1>";
    }
    echo "suma :  $suma </br>";
    echo "resta :  $resta </br>";
    echo "multiplicacion :  $multiplicacion </br>";
    echo "division :  $division </br>";
    echo "</Hr>";
    if ($negrito) {
        ECHO "</H1>";
    }


}


calculadora(10 , 30 );      
calculadora(5 , 10, TRUE );      
calculadora(7 , 12 );      


?>