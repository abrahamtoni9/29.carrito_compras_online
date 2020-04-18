<?php

    function autocargar_clases($class)
    {
        //BUSCA TODAS LAS CLASES DENTRO DE LA CARPETA clases Y CARGA EN INCLUDE
        require_once 'clases/'.$class.'.php'; 
    }

    //CON ESTA FUNCION CARGA TODOS LAS CLASES DEL DIRECTORIO 
    spl_autoload_register('autocargar_clases');
?>