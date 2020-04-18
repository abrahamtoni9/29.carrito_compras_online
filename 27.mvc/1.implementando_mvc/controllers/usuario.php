<?php

    class UsuarioController
    {
        public function mostrarTodos()
        {
            require_once 'models/usuario.php';//desde el index ya tiene acceso es por eso que no usar ../
            
            $usuario = new Usuario();
            $todos_los_usuarios = $usuario ->conseguirTodos();

            require_once 'views/usuarios/mostar-todos.php';
        }
        
        public function crear()
        {
            require_once 'views/usuarios/crear.php';

        }
    }

    

?>