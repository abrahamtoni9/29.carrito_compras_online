<?php

/* 
    tipos de datos :
    Entero (int/integer)=99
    Coma flotante/decimales (float/double) = 3.45
    cadenas (String) = "Hola yo soy un string"
    Boleano (bool) = true false
    null
    Array (colecciont de datos)
    Objetos 
 */

$numero= 44;
$decimal = 30.4;
$texto = 'Soy un texto';
$verdadero = false;
$nula;

echo ('Numero:');
echo gettype($numero);//imprime para saber el tipo de variable
echo '<br>';
echo ('Decimal:');
echo gettype($decimal);//imprime para saber el tipo de variable
echo '<br>';
echo ('Texto:');
echo gettype($texto);//imprime para saber el tipo de variable
echo '<br>';


//DEBUGEAR 
$texto2[] = 'ABRAHAM SALOMON';
$texto2[] = 'ABRAHAM SALOMON2';
//var_dump($texto2);


$texto3 = 'Soy un texto'.$numero;//(recomendable) imprime la variable por que esta con comilla simple
echo $texto3;
echo '<br>';   
$texto6 = "Retorno de carro \r";//retorno de carro \n
echo $texto6;
//imprime la variable por que esta con comilla doble`
$texto4 = "Soy un texto : $numero";
echo $texto4;
echo '<br>';   
$texto5 = "Salto de linea \n";//salto de linea \n (solo funciona cuando usamos la consola)
echo $texto5;
echo 'Hola salto de linea';



