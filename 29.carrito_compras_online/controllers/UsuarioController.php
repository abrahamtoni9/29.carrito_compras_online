<?php

    require_once 'models/usuario.php';

    class UsuarioController
    {

        public function index()
        {
            echo 'controlador usuario accion index';
        }

        public function registro()
        {
            require_once 'views/usuario/registro.php';
        }

        public function save()
        {
            if (isset($_POST)) {
                // var_dump($_POST);
                
                $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false; 
                $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : false; 
                $email = isset($_POST['email']) ? $_POST['email'] : false; 
                $pass = isset($_POST['pass']) ? $_POST['pass'] : false; 
                
                // var_dump($nombre);
                // die();
                if($nombre && $apellido && $email && $pass)
                {
                    $usuario = new UsuarioModelo();
                    $usuario->setNombre($nombre);
                    $usuario->setApellido($apellido);
                    $usuario->setEmail($email);
                    $usuario->setPass($pass);
                    
                    // var_dump($usuario);
                    $save = $usuario->save();
    
                    if($save)
                    {
                        // echo "Registro completado";
                        $_SESSION['register']='complete'; 
                    }
                    else{
                        // echo "Registro fallido"; 
                        $_SESSION['register']='failed'; 
                    }
                    
                }else
                {
                    $_SESSION['register']='failed';

                }
            }
            else
            {
                $_SESSION['register']='failed'; 
            }
            header('Location:'.base_url.'Usuario/registro');
        }
        
        public function login()
        {
            if (isset($_POST)) {
                //indentificar al usuario
                //consulta a la base de datos

                $usuario = new UsuarioModelo();

                $usuario->setEmail($_POST['email']);
                $usuario->setPass($_POST['pass']);

                $identity = $usuario->login();

                // var_dump($identity);
                // die();

                if ($identity && is_object($identity)) {
                    $_SESSION['identity'] = $identity;

                    // var_dump($identity);
                    // die();

                    if ($identity->rol == 'admin') {
                        $_SESSION['admin'] = true;
                    }

                    // var_dump($_SESSION['admin']);
                }
                else
                {
                    $_SESSION['error_login'] = "Identificacion fallida";
                }

                //crear una sesion
            }
            header('Location:'.base_url);
        }



        public function logout()
        {
            if (isset($_SESSION['identity'])) {
                unset($_SESSION['identity']);
            }
            if (isset($_SESSION['admin'])) {
                unset($_SESSION['admin']);
            }
            header("Location:".base_url);
        }

    }

    

?>