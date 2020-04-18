<?php


//1. Crear funciones en PHP
//Ejemplo 1 
//funcion
function muestraNombre()
{
    echo 'Victor Robles<br>';
    echo 'Edgar Benitez<br>';
    echo 'Fabio Gonzalez<br>';
    echo 'Jose Gimenez<br>';
}

//invocar la funcion 
muestraNombre();


function tabla($numero)
{
    var_dump($numero);
    echo $numero;
}

tabla (55);

echo '<br>';


//funcion que recibe parametro por get
function tabla1($numero)
{
    echo "<h3>Tabla de multiplicar del numero:$numero</h3>";
    for ($i=0; $i <=10 ; $i++) {
        $operacion = $numero * $i; 
        echo "$numero x $i = $operacion<br>"; 
    }
}

// if (isset($_GET['numero'])) {
//     tabla1($_GET['numero']);
// } else {
//         echo "No hay numero para sacar la tabla";    # code...
// }


//se le pasa el contador como parametro
for ($i=0; $i <=10 ; $i++) { 
    tabla1($i);
}
?>