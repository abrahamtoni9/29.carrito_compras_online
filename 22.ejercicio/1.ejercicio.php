<?php

//Ejericio 1. Crear una sesion que aumenet su valor en uno o disminuya en uno en funcion de si el parametro get counter esta a uno o a cero

/**
 * 1. Crear los link con parametro counter=1 y counter=0 que uno aumente y el otro disminuya
 * 2. en el encabezado vamos a mostrar el valor que aumenta o disminuye inidicando el valor de $_SESSION['numero']
 * 3.preguntamos si existe $_SESSION['numero'] y si no le asginamos el valor cero
 * 4. preguntamos si existe $_GET['counter'] y si es igual a 1, si existe y es igual a 1 le sumamos mas 1 
 * 5. si es igual a 0 le restamos menos 1 
 */

session_start();

if(!isset($_SESSION['numero']))
{
    $_SESSION['numero'] = 0;
}

if(isset($_GET['counter']) && $_GET['counter'] == 1)
{
    $_SESSION['numero']++;
}

if(isset($_GET['counter']) && $_GET['counter'] == 0)
{
    $_SESSION['numero']--;
}

?>

<h1>El valor de la sesion numero es: <?=$_SESSION['numero']?></h1>
<a href="1.ejercicio.php?counter=1">Aumentar el valor</a><br>
<a href="1.ejercicio.php?counter=0">Disminuir el valor</a>