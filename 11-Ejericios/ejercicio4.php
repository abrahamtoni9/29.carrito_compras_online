<?php


//Ejercicio 4 Recoger dos numeros por la url (Parametro GET) y hacer todas las operacioens basicas 
//de una calculadora*suma resta division y multiplicacion de esos dos numeros

var_dump($_GET);

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    echo "La suma es: ".($numero1+$numero2)."<br>";
    echo "La resta es: ".($numero1-$numero2)."<br>";
    echo "La multiplicacion es: ".($numero1*$numero2)."<br>";
    echo "La division es: ".($numero1/$numero2)."<br>";

}else{  
 echo "<H1>Introduce correctamente los valores por la URL</H1>";
}


?>