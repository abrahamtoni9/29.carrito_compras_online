<?php

if (isset($_POST)) {
    
    //conexion a la base de datos
    require_once 'include/conexion.php';


    //Recoger los valores del formulario
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;;
    $apellido = isset($_POST['apellido']) ? mysqli_real_escape_string($db,$_POST['apellido']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db,trim($_POST['email'])) : false;
    
    // $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    // $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : false;
    // $email = isset($_POST['email']) ? $_POST['email'] : false;
    // $pass = isset($_POST['pass']) ? $_POST['pass'] : false;
    // var_dump($_POST);

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
    

    //VALIDAR APELLIDO
    if(!empty ($apellido) && !is_numeric($apellido) && !preg_match('/[0-9]/',$apellido))
    {
        $apellido_validado = true;
    }else{
        $apellido_validado = false;
        $errores['apellido'] = 'El apellido no es valido';
    }
    
    //VALIDAR EMIAL
    if(!empty ($email) && filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $email_validado = true;
    }else{
        $email_validado = false;
        $errores['email'] = 'El email no es valido';
    }
    

    //var_dump($errores);

    $guardar_usuario = false;
    
    if(count($errores) == 0) //si no hay errores o error es a 0
    {
        $usuario = $_SESSION['usuario'];

        $sql = "SELECT id, email FROM  usuarios WHERE email = '$email'";

        $isset_email = mysqli_query($db, $sql);

        $isset_user =   mysqli_fetch_assoc($isset_email);
        // var_dump($isset_user);
        // die();

        if($isset_user['id'] == $usuario['id'] || empty($isset_user) )
        { 
            
            $sql = "UPDATE usuarios ".
            "SET nombre = '$nombre',".
            "apellido = '$apellido',".
            "email = '$email' ".
            "WHERE id = ".$usuario['id'];

            $guardar = mysqli_query($db,$sql);
            
            //var_dump(mysqli_error($db));//mostrar el error de la sintaxis sql   s
            //die();


            //Mostrar mensaje una vez que se completo la isnercion
            if($guardar)//si es true
            {
                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellido'] = $apellido;
                $_SESSION['usuario']['email'] = $email;
                
                $_SESSION['completado']='Se han actualizado con exito';
            }
            else 
            {
                //agrega otro indice que se llama 'general' en el array de errores con su valor  'Fallo al guardar el usuario'
                $_SESSION['errores']['general'] = 'Fallo al actualizar el usuario';
            }
        }
        else
        {
            $_SESSION['errores']['general'] = 'El correo ya existe';

        }

    }//fin de no hay errores
    else //si hay errores
    {
        $_SESSION['errores'] = $errores;// se crea la sesion de errores y retorna las validaciones a la pagina 1.index.php
        //header("Location: 1.index.php");// devuelve otra vez a la pagina 1.index.php
    }
}

header('Location: mis-datos.php');  //si no entra en si hay errores entonces direccionamos tambien aca 


?>