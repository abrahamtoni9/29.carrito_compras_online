<?php namespace MisClases;


    //NAMESPACE O ESPACIO DE NOMBRE ES COMO UN PAQUETE EN JAVA 


    class Categoria
    {
        public $nombre;
        public $descripcion;

        public function __construct()
        {
            $this->nombre = "Accion";
            $this->descripcion = "Categoria enfocada  a las rewiev de videojuegos de accion";
        }

    }

?>
