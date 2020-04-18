<?php

if(isset($_POST))
{
    require_once 'include/conexion.php';

    $nombre= isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;

    //array de errores
    $errores = array();

    //validar los campos antes de guardar en la base de datos

    //VALIDAR NOMBRE
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match('/[0-9]/',$nombre))
    {
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['nombre'] = 'El nombre no es valido';
    }

    if(count($errores) == 0) //si no hay errores o error es a 0
    {
        $sql = "INSERT INTO categorias VALUES(null, '$nombre');";
        $guardar = mysqli_query($db, $sql);
    }

}

header('Location: 1.index.php');

?>