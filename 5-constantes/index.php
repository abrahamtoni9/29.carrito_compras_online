<?php

/* 
    constantes
 *  Es un contenedor de informacion que no puede variar 
 */

define('nombre','Vitor Roble');//key, value
define('web','vitorroblesweb.es');//key, value

//la constante se puede mostrar por el nombre de la constante sin el signo $
//nombre = 'Victor Robles'
//Web = 'vitorroblesweb.es'

echo nombre.'<br>';
echo web;
echo '<br>';


//CONSTANTES PREDEFINIDAS
ECHO PHP_OS;
echo '<br>';
ECHO PHP_VERSION;
echo '<br>';
ECHO __DIR__;
