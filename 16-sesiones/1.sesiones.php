<?php

//sesion = alamacenar y persistir datos del ususario mientras navega en un sitio web hasta que cierra sesion  o cierra navegador

/*
1. Iniciamos la sesion en esta pagina 
2. si queremos mostrar la variable sesion en otra pagian debemos de iniciar primero en esa pagina (pagina.php) y podemos imprimir la variable
3. Si abrimos la pagina 3.logout.php ahy un metodo para destruir la sesion y borra los datos de session 
*/


//iniciar sesion
session_start();

$variable_normal = "Soy una cadena de texto";

//variable de sesion
$_SESSION['variable_persistente']= "hola soy una sesion activa";

echo $_SESSION['variable_persistente'];


?>