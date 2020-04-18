<?php

//Ejericio 2. 
/**
 * 1. Crear una funcion
 * 2. validar el email con filter_var
 * 3. Recoger variable por get y validarla
 * 4. Mostar el resultado
 * 
 * Pasos para resolver
 * 1. Creamos la funcion validarEmail con un parametro que va a asignarle que se le asigna el valor $_GET['email']
 * 2. Creamos la bandera $status = 'No valido';
 * 3. Preguntamos si no esta vacio  $_GET['email'] y esta validado a email
 * 4. si entra al if cambiamos el valor de la bandera a datos validos
 * 5. y retorna el valor 
 * 6. Preguntamos si existe el elemento email por get
 * 7. si existe imprimi el valor retornado de la funcion validarEmail
 * 8. si no, entonces nos indica que debe pasar el email por get 
*/




function validarEmail($email)
{
    $status = 'No valido';
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $status = 'Datos validos';

    }

    return $status;
}

if(isset($_GET['email']))
{
    echo validarEmail($_GET['email']);
}
else{
    echo 'Debe pasar el email por get';
}

?>
