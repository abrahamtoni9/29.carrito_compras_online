
<?php


    session_start();
    //REEMPLAZAMOS LOS REQUIRES POR EL AUTOLOAD
    require_once 'config/db.php';
    require_once 'helpers/utils.php';
    require_once 'autoload.php';
    require_once 'config/parameter.php';
    require_once 'views/layout/head.php';
    require_once 'views/layout/sidebar.php';
    // require_once 'controllers/UsuarioController.php';
    // require_once 'controllers/NotaController.php';
    
    // $db=Database::connect();

    // $not = new UsuarioController();
    
    // var_dump ($not->mostrarTodos());


    function show_error()
    {
        $error = new ErrorController();
        // $error->index();
    }

    // LOS PARAMETRO QUE VIENE DE LA URL 'controllers' y 'action' estan configurado en el archivo de htacces y por defecto en cada pagina se le agrega

    // si existe el parametro controllers entonces se le concatena la cadena Controller
    if (isset($_GET['controllers'])) {
        $nombre_controlador = $_GET['controllers'].'Controller';//Concatenamos para que la url no se haga muy larga entonces colocamos solamente Usuario y con el concate queda UsuarioControllers
        // var_dump($nombre_controlador);
    }

    //SI EXISTE LA VARIABLE controllers Y  action POR GET 
    elseif(!isset($_GET['controllers']) && !isset($_GET['action']))
    {
        //SE LE ASIGNA POR DEFECTO EL VALOR POR DEFECTO QUE LE DIMOS EN EL ARCHIVO HTACCES 'ProductoController'
        $nombre_controlador =  controller_default;
    }
    else
    {   
        // echo "La pagina que buscas no existe";
        // exit();
        show_error();
    }
    
    
    //si existe la variable y clase $nombre_controlador 
    if (isset($nombre_controlador) && class_exists($nombre_controlador)) {
        // $controlador = new UsuarioController();

        //CREAMOS EL OBJETO DE LA CLASE ProductoController
        $controlador = new $nombre_controlador();
        
        // $controlador->mostrarTodos();
        // $controlador->crear();
        

        //SI EXISTE LA ACCION O METODO DE LA CLASE CONTROLADOR
        if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {//por url le indicamos el valor a la variable action ej.: action=crear
            
            $action = $_GET['action']; 
            $controlador->$action();
        }
        //SI NO EXISTE LA CLASE Y EL METODO POR GET
        elseif(!isset($_GET['controllers']) && !isset($_GET['action']))
        {
            //SE LE ASIGNA A VARIABLE action POR GET EL METODO DE LA CLASE ProductoController que es index 
            $action_default = action_default;
            //SE ASIGNA AL CONTROLLER Y ACCION
            $controlador ->$action_default();//va en parentesis porque el index es un metodo DE LA CLASE ProductoController
        }

        else
        {
            // echo "La pagina que buscas no existe";
            show_error();
        }
        
    }//SI NO EXISTE LA CLASE 
    else
    {
        // echo "La pagina que buscas no existe";
        show_error();
        
    }
    
    require_once 'views/layout/footer.php';
    
    ?>