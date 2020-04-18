<?php

//Array

$pelicula = array('Spiderman', 'Batman', 'Superman');
$cantantes = ['Ronaldo', 'Neymar','Ronaldhino'];

//Recorrer con for 
echo '<h1>Listado de Peliculas con FOR</h1>';
echo '<ul>';
for ($i=0; $i < count($pelicula); $i++) { 
    echo '<li>';
    echo $pelicula[$i];
    echo '</li>';
}
echo '</ul>';


//Recorrer con foreach
echo '<h1>Listado de Peliculas con FOREACH</h1>';
echo '<ul>';
foreach ($cantantes as $value) {
    echo "<li>$value</li>";
}
echo '</ul>';

?>