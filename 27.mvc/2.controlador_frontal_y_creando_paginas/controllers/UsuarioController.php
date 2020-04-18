<?php

    class UsuarioController
    {
        public function mostrarTodos()
        {
            require_once 'models/UsuarioModelo.php';//desde el index ya tiene acceso es por eso que no usar ../
            
            $usuario = new Usuario();


            // var_dump($usuario->conseguirTodos());
            //die();

            $todos_los_usuarios = $usuario->conseguirTodos();

            require_once 'views/usuarios/mostar-todos.php';
        }
        
        public function crear()
        {
            require_once 'views/usuarios/crear.php';

        }
    }

    

?>