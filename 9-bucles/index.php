<?php

//1. bucle while
echo '<h3>while<h3>';

$numero = 0;
while( $numero <= 100)
{
    echo $numero;
    if ($numero != 100) {
        echo ',';
    }
    $numero++;
}


echo '<hr>';
echo '<h3>WHILE CON GET<h3>';
if (isset($_GET['numero'])) {//si existe el parametro por get
    //castear a int
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}

var_dump($numero);


$contador = 1;
while($contador <= 10)
{
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
    $contador++;
}

//echo $_GET['parametro'];


echo '<hr>';
echo '<h3>DO WHILE<h3>';

$edad = 17;
$contador = 1;
do{
    echo "Tienes acceso a un local privado $contador <br>";
    $contador++;
}while($edad >= 18 && $contador <= 10);


for ($cont=1; $cont <= 100 ; $cont++) { 

    

    
    echo "$numero x $contador= ".($numero*$contador)."<br>";

    //5. BREAK
    $numero = 45;
    if ($numero == 45) {
        echo 'No se pueden mostrar estas operaciones prohibidas';
        break;
    }
}




?>