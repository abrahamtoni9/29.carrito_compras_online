<?php
    require_once 'Coche.php';

    // $coche = new Coche();

    // $coche -> color = 'Amarillo';

    // var_dump($coche);


//    $coche1 = new Coche($color, $marca, $modelo, $velocidad,$caballaje, $plazas);
$coche1 = new Coche('Gris', 'Mercedez', 'MCLarem', 150, 200, 4);
$coche2 = new Coche('Granate', 'Toyota', 'Premio', 250, 100, 3);
$coche3 = new Coche('Gris', 'Golf', 'Golfi', 170, 300, 7);

   var_dump($coche1);
   var_dump($coche2);
   var_dump($coche3);
?>