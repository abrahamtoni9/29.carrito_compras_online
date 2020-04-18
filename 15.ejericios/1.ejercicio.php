<?php
    //hacer un programa en PHP que tenga un array con 8 numeros enteros y que haga los sgte:
    //-Recrorrerlo y mostrarlo
    //-Ordenarlo y mostrarlo
    //-Mostrar su longuitud 
    //-Buscar algun elemento
    //buscar algun elemento (buscar por el parametro que me lleve por la url)

    $numeros = array(11,44,55,77,23,9,97,67);

    //recorrer el array

    echo "<h1>Recorrer y mostrar</h1>";
    
    echo mostrarArray($numeros);
    
    //Ordenarlo y mostrarlo
    echo "<h1>Ordenar y mostrar</h1>";
    sort($numeros);
    var_dump($numeros);
    echo mostrarArray($numeros);
    
    //Funciones para no repetir codigo
    function mostrarArray($numeros)
    {
        $resultado = "";
        foreach ($numeros as $value) {
            //$resultado = $resultado.$value."<br>"
            $resultado .= $value."<br>";
        }
        
        return $resultado;
    }
    
    //Mostrar su longuitud
    echo "<h1>Mostrar la longuitud</h1>";
    echo count($numeros);
    
    
    //Busqueda en el array
    //buscar algun elemento por get
if($_GET['numero'])
{
    $busqueda = $_GET['numero'];
    echo "<h1>Buscar en el array el numero $busqueda</h1>";

    $search = array_search($busqueda, $numeros);
    var_dump($search);

    if(!empty($search))//si no esta vacio entonces entra en el if
    {
        echo "<h4>El numero buscado existe en el array, en el indice: $search</h4>";
    }
    else{
        echo "<h4>El numero buscado no existe en el array</h4>";

    }
}

?>