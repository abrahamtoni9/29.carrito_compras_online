<?php

function calculadora ($numero1, $numero2, $negrito = false)
{
    //conjunto de instruccciones a ejecutar

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    $cadena = "";

    if ($negrito) {
        $cadena .=  "<H1>";
    }
    $cadena .= "suma :  $suma </br>";
    $cadena .=  "resta :  $resta </br>";
    $cadena .=  "multiplicacion :  $multiplicacion </br>";
    $cadena .=  "division :  $division </br>";
    $cadena .=  "</Hr>";
    if ($negrito) {
        $cadena .=  "</H1>";
    }
    $cadena .=  "<Hr>";
    //var_dump($cadena);

    //var_dump($cadena); 
    return $cadena;
}


echo calculadora(10 , 30 );      
echo calculadora(5 , 10, TRUE );      
echo calculadora(7 , 12 );      
// calculadora(10 , 30 );      
// calculadora(5 , 10, TRUE );      
// calculadora(7 , 12 );      


function devuelveElNombre($nombre)
{
    return "El nombre es : $nombre";
}

echo devuelveElNombre("Victor Robles");


?>