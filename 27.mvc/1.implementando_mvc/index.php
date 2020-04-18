
<h1>Bienvenido a mi web con MVC</h1>

<?php

    require_once 'controllers/usuario.php';

    $nombre_controlador = $_GET['controllers']."Controller";

    if (isset($nombre_controlador) && class_exists($nombre_controlador)) {
        // $controlador = new UsuarioController();
        $controlador = new $nombre_controlador();
    
        // $controlador->mostrarTodos();
        // $controlador->crear();
        
        if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {//por url le indicamos el valor a la variable action ej.: action=crear 
            $action = $_GET['action'];
            $controlador->$action();
        }
        else
        {
            echo "La pagina que buscas no existe";
        }
        
    }
    else
    {
        echo "La pagina que buscas no existe";

    }

 
?>