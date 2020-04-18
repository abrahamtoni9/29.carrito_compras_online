<?php

//2. Escribir un script en PHP que nos muestre por pantalla todos los nros pares que hay del 1 al 100

for ($i=0; $i < 100; $i++) {
    
    if (($i % 2) == 0) {
        # code...
        echo $i.'<br>';
    }
}


?>