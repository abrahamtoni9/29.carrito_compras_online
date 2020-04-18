<?php

//1.operadores aritmeticos

$numero1 = 55;
$numero2 = 33;

echo 'Suma : '.($numero1 + $numero2).'<br>';
echo 'Resta : '.($numero1 - $numero2).'<br>';
echo 'Multiplicacion : '.($numero1 * $numero2).'<br>';
echo 'Division : '.($numero1 / $numero2).'<br>';
echo 'Resto : '.($numero1 % $numero2).'<br>';



//2.Operadores incremento y decremento
$year = 2019;
$year++;
echo '<H1>'.$year.'<H1>';
$year--;
echo '<H1>'.$year.'<H1>';


//3. Operadores de asignacion
$edad = 55;
echo 'Edad de 55 = '.$edad.'<br>';

echo 'Edad de 60 = '.($edad += 5);


?>