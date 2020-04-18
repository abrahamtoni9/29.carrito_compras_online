<?php
 
//comprueba una variable si esta vacia  y si esta rellenarla con texto en minuscula  y mostrarlo en mayuscula y negrita

$text = "";

if(empty($texto))
{
    $text = "hola yo soy el relleno de la variable texto";
    $textoMayuscula = strtoupper($text);
    echo "<strong>$textoMayuscula</strong>"; 
}
else{
    echo "La variable tiene este contenido dentro ".$texto;
}
?>