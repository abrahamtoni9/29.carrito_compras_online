<?php namespace MisClases;


    //NAMESPACE O ESPACIO DE NOMBRE ES COMO UN PAQUETE EN JAVA 


    class Usuario
    {
        public $nombre;
        public $email;

        public function __construct()
        {
            $this->nombre = "Victor Robles";
            $this->email = "victor@hotmail.com";
        }

    }

?>