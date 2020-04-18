<?php

    require_once '../vendor/autoload.php';

    //conexion bd
    $conexion = new mysqli("localhost","root","","notas_master","3306");//ES LO MISMO QUE mysqli_connect
    $conexion->query("SET NAMES 'UTF8'"); //(conexion,consulta)


    //consultar para contar elementos totales a paginar
    // $consulta = $conexion->query("SELECT * FROM notas");
    $consulta = $conexion->query("SELECT COUNT(id) as total FROM notas");//se puede hacer de esta forma
    $numero_fila = $consulta->fetch_object()->total;//devuelve el nro de fila
    // $numero_fila = $consulta->num_rows;//devuelve el nro de fila
    
    // var_dump($numero_fila);

    
    //Hacer paginacion
    $pagination = new Zebra_Pagination();
    
    //Numero total de elemento a paginar
    $pagination->records($numero_fila);
    
    //Numero de elementos por paginar
    $numero_elementos_por_pagina= 2;
    $pagination->records_per_page($numero_elementos_por_pagina);
    
    
    $page = $pagination->get_page(); //SACA LA PAGINA ACTUAL

    $registro_desde = (($page - 1)* $numero_elementos_por_pagina);//pagina * numero de pagina hasta el numero de elemento Ej. pag_actual (4) - 1  *  2   ('3 * 2 = 6 numero de posicion del registro')
    $sql = "SELECT * FROM notas LIMIT $registro_desde ,$numero_elementos_por_pagina";// LIMIT muesta registro de filas posicion_desde_del_registro, nro_de_registro_a_visualizar 
    $notas = $conexion->query($sql);


    // echo $sql;

    while($nota = $notas->fetch_object())
    {
        echo "<h1>{$nota->titulo}</h1>";
        echo "<h1>{$nota->descripcion}</h1><br>";
    }

    //carga de los stylos parra la paginacion
    echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';
    $pagination->render();//muesta la paginacion