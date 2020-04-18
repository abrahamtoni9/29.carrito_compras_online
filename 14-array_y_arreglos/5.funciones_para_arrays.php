<?php

$jugadores = ['Ronaldo', 'Neymar','Ronaldhino', 'Alfredo'];

arsort ($jugadores);//ordena en orden alfabetico inverso
var_dump($jugadores);
echo "<br>";    
sort ($jugadores);//ordena en orden alfabetico
var_dump($jugadores);
echo "<br>";    

$numero = [1,2,3,4,5];
sort ($numero);//ordena en orden alfabetico
var_dump($numero);
echo "<br>";    


//Anadir elemento a un array
$jugadores[] = 'Cristiano';
array_push($jugadores,'Benzema');
var_dump($jugadores);
echo "<br>";    

//Eliminar un elemento de un array
//elimina el ultimo elemento
array_pop($jugadores);
var_dump($jugadores);
echo "<br>";    

//Si quiero eliminar un indice concreto 
unset($jugadores[2]);
var_dump($jugadores);
echo "<br>";    

//Mostrar un nro de indice aleatorio
$indice = array_rand($jugadores);
echo $jugadores[$indice];
echo "<br>";    


//Dar la vuelta el array con reverse
;
var_dump(array_reverse($jugadores));
echo "<br>";    
var_dump(array_reverse($numero));
echo "<br>";    


//Buscar un string dentro de un array 
$resultado  = array_search("Cristiano", $jugadores);
var_dump($resultado);
echo "<br>";    


//Contar el nro de elemento de un array
echo count($jugadores);
echo "<br>";    
echo count($numero);
echo "<br>";    
echo sizeof($numero);
echo "<br>";    
echo sizeof($jugadores);
