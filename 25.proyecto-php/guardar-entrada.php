<?php

if(isset($_POST))
{
    require_once 'include/conexion.php';


    $titulo= isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
    $descripcion= isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
    $categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;
    $usuario = $_SESSION['usuario']['id'];

    //array de errores
    $errores = array();

    //validar los campos antes de guardar en la base de datos

    //VALIDAR NOMBRE
    if(empty($titulo) )
    {
        $errores['titulo'] = 'El titulo no es valido';
    }
    //VALIDAR DESCRIPCION
    if(empty($descripcion) )
    {
        $errores['descripcion'] = 'La descripcion no es valido';
    }
    //VALIDAR CATEGORIA
    if(empty($categoria) && !is_numeric($categoria))
    {
        $errores['categoria'] = 'La categoria no es valido';
    }

    // var_dump($errores);
    // die();


    if(count($errores) == 0) //si no hay errores o error es a 0
    {
        if (isset($_GET['editar'])) {
            $entrada_id = $_GET['editar'];
            $usuario_id = $_SESSION['usuario']['id'];
            $sql = "UPDATE entradas SET titulo = '$titulo', descripcion = '$descripcion', categoria_id = $categoria   WHERE id = $entrada_id AND usuario_id = $usuario_id";
        }
        else
        {
            $sql = "INSERT INTO entradas VALUES(null, $usuario,$categoria,'$titulo','$descripcion', curdate());";
        }
        $guardar = mysqli_query($db, $sql);

        // var_dump('hola 1');
        // die();
        
        header('Location: 1.index.php');//una vez insertado los datos redirigimos al index
    }else
    {
        
        // var_dump('hola 2');
        // die();
        $_SESSION['errores_entrada'] = $errores;
        if (isset($_GET['editar'])) {
            header('Location: editar-entradas.php?id='.$_GET['editar']);
        }
        header('Location: crear-entradas.php');//si hay errores en los campos redirigimos a la pagina actual

    }

}


?>