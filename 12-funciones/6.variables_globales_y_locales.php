<?php


//variables locales 


$frase = "Ni los genios, son tan genios, ni los mediocres son tan mediocres";

echo $frase; //variable global

function holaMundo()
{
    global $frasel; //le defino como global para que reconozca la variable dentro de la funcion 
    echo $frase;

    $year = 2020;
    echo "<h4>$year</h4>";
     return $year; //retorna string la funcion
     
    }
    
    echo holaMundo(); //Imprime la funcion, la funcion retorna un string por eso se usa el echo
    
    return $year; //no imprime porque es una variable local que se encuentra dentro de la funcion
    
?>