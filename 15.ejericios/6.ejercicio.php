<?php
 
$tabla = array(
    "Accion" => array("GTA5","call of duty","PUB"),
    "Aventura" => array("assasins creed","Crash Bandicoot", "Prince of Persia"),
    "Deportes" => array("Fifa 19", "Pes 19", "Moto g 19")

);

//var_dump(array_keys($tabla));
$categoria = array_keys($tabla);

// foreach ($categoria as $value) {
//     echo $value.'<br>';
// }
?>

<table border= "1">
    
    <?php include "encabezado.php"?>

</table>

