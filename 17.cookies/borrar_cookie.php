<?php

if (isset($_COOKIE['micookie'])) {
    unset($_COOKIE['micookie']);
    //(nombre de la cookie, cadena vacio, fecha actual menos 100) y borra la caducidad 
    setcookie('micookie','',time()-100);
    echo 'Se borro correctamente la cookie "micookie"';
}
else
{
    echo "No existe la cookie 'micookie'";
}

//es una funcion para cambiar la cabecera, si cambio el location, lo que haho es cambiar el nombre de la pagina y me redirecciona a otro sitio
header('Location:ver_cookie.php');

?>
<br>
<!-- <a href="ver_cookie.php">Regresar</a> -->
