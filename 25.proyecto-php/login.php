<?php

//Iniciar  la sesion  y la conexion a la bd 
    require_once 'include/conexion.php';

//Recoger  datos del formulario
    if(isset($_POST))
    {

        //si existe la sesion de error entonces borramos
        //borrar error antiguo
        if (isset($_SESSION['error_login']))
        {
            $_SESSION['error_login'] = null;
            session_unset($_SESSION['error_login']);
            
        }

        //recogo datos del formulario
        $email = trim($_POST['email']);
        $pass =  $_POST['pass'];

        //Consulta para comprobar las credenciales del usuario
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $login = mysqli_query($db, $sql);

        if ($login && mysqli_num_rows($login) == 1) //mysqli_num_rows que cuente el nro de fila que devuelve 
        {
            $usuario = mysqli_fetch_assoc($login); //array asociativo de la consulta
            // var_dump($usuario);
            // die();


            // //Comprobar la constrasena / cifrar
            // $password_segura = password_hash($pass, PASSWORD_BCRYPT, ['post' => 4]);
            // var_dump($password_segura);
            // die();
            
            $verify = password_verify($pass, $usuario['pass']); //compara las pass
            // var_dump($verify);
            // die();
            
            if ($verify) {
                //Utilizar una sesion para guardar los datos del usuario logueado
                $_SESSION['usuario'] = $usuario;
                //  var_dump($_SESSION['usuario']);
                //  die();

                
            }
            else
            {
                //Si algo falla  enviar una sesion con el fallo 
                $_SESSION['error_login'] = 'Login incorrecto';
                
            }
        }
        else
        {
            $_SESSION['error_login'] = 'Login incorrecto';

        }
    }
    //Redirigir al 1.index.php
    header('Location: 1.index.php');









?>