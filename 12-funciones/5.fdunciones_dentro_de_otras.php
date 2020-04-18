<?php

function getNombre ($nombre)
{
    $texto = "El nombre es : $nombre";
    return $texto;
}  
function getApellido ($apellido)
{
    $texto = "El nombre es : $apellido";
    return $texto;
}  


function devuelveElNombre($nombre, $apellido)
{
    $texto = getNombre($nombre)
            ."<br>".
            getApellido($apellido);
    return $texto;
}

echo devuelveElNombre("Victor"," Robles");


?>