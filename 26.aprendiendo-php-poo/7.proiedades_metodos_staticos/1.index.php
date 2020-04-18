<?php

require_once 'configuracion.php';

configuracion::setColor("Azul");
configuracion::setEntorno("Localhost");
configuracion::setNewleter("True");

//AL SER ESTATICO SE QUEDA COMPARTIDO CON OTRAS CLASES  
echo configuracion::getColor()."<br>";
echo configuracion::getEntorno()."<br>";
echo configuracion::getNewleter()."<br>";


//SE PUEDE INSTANCIAR TBN
$configuracion = new configuracion();
$configuracion::$color = 'Rojo<br>'; 
echo $configuracion::$color; 
//echo $configuracion->$color;//genera error porque no se puede acceder a una propiedad estatico de esta forma 
var_dump($configuracion);

?>