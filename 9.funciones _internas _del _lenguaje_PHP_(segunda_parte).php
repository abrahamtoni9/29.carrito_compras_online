<?php

$nombre = "Victor Robles";
echo gettype($nombre);
// echo var_dump($nombre);

echo "<br>";

if (is_string($nombre)) {
    echo "Esa variable es un String<br>";
} elseif(!is_float($nombre)) {
    echo "Esa variables no es un numero con decimales";
}

if (isset($edad)) {
    echo "La variable exisete";
} else {
    echo "La variable no exisete";
}
echo "<br>";
$frase= "   mi contendio    ";
var_dump(trim($frase));


//eliminar la variable
$year = 2020;
unset($year);
var_dump($year);

//comprobar variable vacia o no existe, en caso de que sea false esta vacio tbn
$texto = "";

if (empty(trim($texto))) {
    echo "La variable esta vacio";
} else {
    echo "La variable no esta vacio";
}

echo "<br>";

//contar caracter de string
$cadena = "12345";
echo strlen($cadena);
echo "<br>";


//encontrar caracter y mostar la posicion del caracter
$frase = "La vida es bella";
echo strpos($frase, "vida");
echo "<br>";


//reemplazar un string
$frase = str_replace("vida","moto",$frase);
echo $frase;

echo "<br>";
//mayuscula y minuscula
echo strtolower($frase);
echo strtoupper($frase);

?>