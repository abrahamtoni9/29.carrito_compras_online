<?php

//funciones variables

function buenasDias ()
{
    return "Buenas dias";
}
function buenasTardes ()
{
    return "Buenas tardes";
}
function buenasNoches ()
{
    return "Buenas noches";
}

//creamos la variabla horario y como valor le pasamos el nombre de la funcion
$horario = "buenasNoches"; 

//imprimimos la variable y le colocamos los parentesis para saber que tenemos la funcion dentro
echo $horario();


//Concatenamos
echo "<br>";

$hora = "buenas";
$mifuncion = $hora."Tardes";
echo $mifuncion();

echo "<br>";

//Pasamos por get el parametro
$horar = $_GET['horario'];
$mifuncion = "buenas".$horar;
echo $mifuncion();

?>