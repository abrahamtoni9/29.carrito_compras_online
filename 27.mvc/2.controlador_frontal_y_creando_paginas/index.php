
<h1>Bienvenido a mi web con MVC</h1>

<?php

    require_once 'controllers/UsuarioController.php';
    require_once 'controllers/NotaController.php';
    
    // $not = new UsuarioController();

    // var_dump ($not->mostrarTodos());


    if (isset($_GET['controllers'])) {
        $nombre_controlador = $_GET['controllers'].'Controller';//Concatenamos para que la url no se haga muy larga entonces colocamos solamente Usuario y con el concate queda UsuarioControllers
        var_dump($nombre_controlador);
    }else
    {   
        echo "La pagina que buscas no existe";
        exit();
    }

     
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