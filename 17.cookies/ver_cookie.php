<?php

//para mostrar el valor de las cookies tengo que usar $_COOKIE, una variable superglobal, es un array asociativo


if(isset($_COOKIE['micookie']))
{
    echo "<h1>".$_COOKIE['micookie']." 'MICOOKIE'</h1>";
}
else 
{
    echo "No existe la cookie micookie";
}

//unyear
if(isset($_COOKIE['unyear']))
{
    echo "<h1>".$_COOKIE['unyear']." 'UNYEAR'</h1>";
}
else 
{
    echo "No existe la cookie unyear";
}

?>

<a href="borrar_cookie.php">Borrar mis galletas</a>
<br>
<!-- <a href="1.cookies.php">Regresar</a> -->
<a href="1.cookies.php">Crear Cookies</a>