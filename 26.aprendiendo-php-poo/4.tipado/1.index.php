<?php
    require_once 'Coche.php';


//    $coche1 = new Coche($color, $marca, $modelo, $velocidad,$caballaje, $plazas);
$coche = new Coche('Gris', 'Mercedez', 'MCLarem', 150, 200, 4);
//$coche1 = new Coche('Gris', 'Mercedez', 'MCLarem', 150, 200, 4);
$coche2 = new Coche('Granate', 'Toyota', 'Premio', 250, 100, 3);
$coche3 = new Coche('Gris', 'Golf', 'Golfi', 170, 300, 7); 

$coche->color = 'Rosa';
// $coche->marca = 'bbb';
$coche->setMarca ('Nike');
// $coche->modelo = 'ccc';
$coche->setModelo('AIR');

echo $coche->mostrarInformacion($coche); 

// var_dump($coche);
// echo '<br>';
// var_dump($coche->getModelo());
// var_dump($coche->marca);
// var_dump($coche->modelo);
//    var_dump($coche1);
//    var_dump($coche2);
//    var_dump($coche3);
?>