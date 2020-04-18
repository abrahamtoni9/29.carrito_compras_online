<?php

//cookie : es un fichero que se almacena en el ordenador del usuario que visita la web, con el fin de recordar datos o rastrear ciertas informacion o comportamiento del mismo en la web

//1. Creamos las variables cookies
//2.Creamos otras paginas donde vamos a visualizar las cookies
//3. en el desarrollo del navegador nos vamos a application-cookie y vemos que se guarda en el navegador con el nombre de la cookie 'micookie'

//4. Para borrar creamos una pagina borrar_cookie.php, preguntamos si existe la cookie y borramos con la funcion unset y luego tenemos que caducar con la funciont setcookie (nombre de la cookie, cadena vacio, fecha actual menos 100) y borra la caducidad, podemos ver en el navegador que application-cookies-localhost que se ha borrado el nombre de la cooki

//5. Podemos redireccionar la pagina con la funcion header('Location:ver_cookies.php':) que al querer ingresar en esa pagina nos redireccion de nueva a la pagina ver_cookie.php , en este caso usamos para las paginas cookies.php y borrar_cokie.php y en la pagian ver_cookie.php tenemos enlaces a esas pagina donde tratamos de ingresar y pero al tener redireccinamientos las dos pagina nos devuelve a la pagina actual


//crear cookie
//parametros (nombre,valor,caducidad,ruta,dominio)
// setcookie("nombre","valor que solo puede ser texto",caducidad,ruta,dominio);

//cookie basica
setcookie("micookie","Este es el valor de mi galleta 'micookie'");


//cookie con expiracion (time(segundo,minutos,24 horas,365 dias)) por 1 anio 
setcookie("unyear","valor de mi galleta por 365 dias",time()+(60*60*24*365));

//es una funcion para cambiar la cabecera, si cambio el location, lo que haho es cambiar el nombre de la pagina y me redirecciona a otro sitio
header('Location:ver_cookie.php');

?>
<!-- <a href="ver_cookie.php">Ver las cookies</a> -->