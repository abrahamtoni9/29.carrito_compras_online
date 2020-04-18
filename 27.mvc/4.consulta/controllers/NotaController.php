<?php

    class NotaController
    {
        public function listar()
        {
            //MODELO
            require_once 'models/NotaModelo.php';//desde el index ya tiene acceso es por eso que no usar ../
            
            //LOGICA ACCION DEL CONTROLADOR
            $nota = new Nota();

            $notas = $nota->conseguirTodos('notas');

            var_dump($notas);

            //VISTA
            require_once 'views/nota/listar.php';
        }
        
        public function crear()
        {
//            require_once 'views/usuarios/crear.php';
            
            //MODELO
            require_once 'models/NotaModelo.php';//desde el index ya tiene acceso es por eso que no usar ../
            
            $nota = new Nota();
             $nota->setUsuario_id(1);
            $nota->setTitulo("Nota desde PHP MVC");
            $nota->setDescripcion("descripcion de una nota");
            
            $guardar =  $nota->guardar();
            
//            echo $nota->db->error;
//            die();
            
            header("Location: index.php?controllers=Nota&action=listar");
        }

        public function borrar()
        {
            
        }
    }

    

?>