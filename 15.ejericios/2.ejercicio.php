<?php
    //anadir valores a un array mientras que su longuitud sea menor a 120 y luego mostrar por pantalla
    $coleccion = array();

    for ($i=0; $i < 120 ; $i++) { 
        array_push($coleccion, "Elemento-".$i);
        
    }
   //var_dump($coleccion);
   echo $coleccion[45];
?>