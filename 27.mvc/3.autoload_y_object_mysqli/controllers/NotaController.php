<?php

    class NotaController
    {
        public function listar()
        {
            //MODELO
            require_once 'models/NotaModelo.php';//desde el index ya tiene acceso es por eso que no usar ../
            
            //LOGICA ACCION DEL CONTROLADOR
            $nota = new Nota();
            $nota->setNombre("Hola");
            $todos_los_usuarios = $nota->setContenido("Hola Mundo PHP MVC");

            //VISTA
            require_once 'views/nota/listar.php';
        }
        
        public function crear()
        {
            require_once 'views/usuarios/crear.php';

        }

        public function borrar()
        {
            
        }
    }

    

?>