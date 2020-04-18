<?php

if (isset($_POST)) {
    
    //conexion a la base de datos
    require_once 'include/conexion.php';

    if (!isset($_SESSION)) {//si no existe una sesion, pero en este caso existe la clase conexion, entonces se crea aca 
        session_start();
    }


    //Recoger los valores del formulario
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;;
    $apellido = isset($_POST['apellido']) ? mysqli_real_escape_string($db,$_POST['apellido']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db,trim($_POST['email'])) : false;
    $pass = isset($_POST['pass']) ? mysqli_real_escape_string($db,$_POST['pass']) : false;
   
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
        $errores['emial'] = 'El email no es valido';
    }
    

    //VALIDAR PASS
    if(!empty($pass))//no esta vacio 
    {
        $pass_validado = true;
    }else{//si esta vacio
        $pass_validados= false;
        $errores['pass'] = 'El password esta vacio';
    }

    //var_dump($errores);

    $guardar_usuario = false;
    
    if(count($errores) == 0) //si no hay errores o error es a 0
    {
        //insertar usuario en la base de datos 
        $guardar_usuario = true;

        //cifrar la pass
        $password_segura = password_hash($pass, PASSWORD_BCRYPT,['cost' => 4]);

        //var_dump($pass);
        //var_dump($password_segura);



        //descifrar pass
        //var_dump(password_verify($pass,$password_segura));//compara dos password sin necesidad de descifrar y devuelve true o false , true si son iguales
        //die();

        $sql = "INSERT INTO usuarios VALUES(null,'$nombre','$apellido','$email','$password_segura' ,CURDATE())";

        $guardar = mysqli_query($db,$sql);
        
        //var_dump(mysqli_error($db));//mostrar el error de la sintaxis sql   s
        //die();


        //Mostrar mensaje una vez que se completo la isnercion
        if($guardar)//si es true
        {
            $_SESSION['completado']='El registro se ha completado con exito';
        }
        else 
        {
            //agrega otro indice que se llama 'general' en el array de errores con su valor  'Fallo al guardar el usuario'
            $_SESSION['errores']['general'] = 'Fallo al guardar el usuario';
        }


    }//fin de no hay errores
    else //si hay errores
    {
        $_SESSION['errores'] = $errores;// se crea la sesion de errores y retorna las validaciones a la pagina 1.index.php
        header("Location: 1.index.php");// devuelve otra vez a la pagina 1.index.php
    }
}

header('Location: 1.index.php');  //si no entra en si hay errores entonces direccionamos tambien aca 


?>