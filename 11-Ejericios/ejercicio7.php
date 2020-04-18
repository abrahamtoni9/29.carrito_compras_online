<?php


//Ejercicio 5 hacer un programa que muestre dos todos los numeros  entre  dos numeros impares que nos lleguen  por la URL ($_GET)

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if ($numero1 < $numero2) {
        
            for ($i=$numero1; $i < $numero2 ; $i++) { 
                if ($i%2 != 0) {
                    echo "<h4>$i</h4>";
                }
            }
    }else
    {
        echo "<H1>El numero 1 debe ser menor al numero 2 </H1>";

    }
}else{  
 echo "<H1>Introduce correctamente los valores por la URL</H1>";
}

?>