<?php
/*

1. Condicionales
if (condition) {
    # code...
} else {
    # code...
}
*/

//Ejemplo 1
$color = 'verde'; 
if ($color == 'rojo')
{
    echo 'EL COLOR ES ROJO';
}else{
    echo 'EL COLOR NO ES ROJO';
}

echo '<br>';

//Ejemplo 2 
$year = 2019; 
if ($color >= 2019)
{
    echo 'ESTAMOS EN EL 2019 EN ADELANTE';
}else{
    echo 'ES UNA ANTERIOR AL 2019';
}


//Ejemplo 3 
$nombre = 'David Extremadura';
$edad = 49;
$mayoria_edad = 18;
$ciudad = 'Madrid';
$continente = 'Asia';

if ($edad >= $mayoria_edad) {
    echo "<h1>$nombre es mayor de edad</h1>";
    if ($continente == 'Europa') {
        echo "<h2>y es de $ciudad </h2>";
        # code...
    }else{
        echo 'No es europeo';
    }
} else {
    echo "<h1>$nombre no es mayor de edad</h1>";
    # code...
}

echo "<br>";
echo "<hr>";

//Ejemplo 4
$dia = 3;
/*
if ($dia == 1 ) {
} else {
    if ($dia == 2) {
        echo 'Es Martes';
    }else{
        if ($dia == 3) {
            echo 'Es Miercoles';
        }else{
            if ($dia == 4) {
                echo 'Es Jueves';
            }
            else{
                if ($dia == 5) {
                    echo 'Es Viernes';
                }
                else{
                    echo 'Es fin de semana';
                    
                }
                
            }
        }
    }
    # code...
}
*/
if ($dia == 1) {
    echo 'Lunes';   
}
elseif ($dia == 2) {
    echo 'Martes';   
}
elseif ($dia == 3) {
    echo 'Miercoles';   
}
elseif ($dia == 4) {
    echo 'Jueves';   
}
elseif ($dia == 5) {
    echo 'Viernes';   
}
elseif ($dia == 5) {
    echo 'Viernes';   
}
else {
    echo 'Es fin de semana';
}
echo '<hr>';
echo '<h3>Swicht<h3>';


//swicht

switch($dia)
{
    case 1:
        echo 'Lunes';
    break;
    case 2:
        echo 'Martes';
    break;
    case 3:
        echo 'Miercoles';
    break;
    case 4:
        echo 'Jueves';
    break;
    case 5:
        echo 'Viernes';
    break;
    default:
    echo 'Es fin de semana';
}

echo '<hr>';
echo '<h3>GOTO<h3>';

goto marca;
echo 'Instruccion 1 ';
echo 'Instruccion 2 ';
echo 'Instruccion 3 ';
echo 'Instruccion 4 ';

marca:
echo 'Me e saltado 4 echos';


?>