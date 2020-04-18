<?php

require_once '1.index.php';

$persona = new Persona();
// $persona ->setNombre("Victor");

var_dump($persona);
echo '<br>';

$informatico = new Informatico();

// $informatico ->setAltura(1.90); 
// echo $informatico ->sabeLenguaje("html, css, javascript, node"); 

var_dump($informatico);//la variable $informatico obtiene las mismas propiedades o variables que el objeto Persona
echo "<br>";


$tecnico = new TecnicoRedes();

var_dump($tecnico);

?>