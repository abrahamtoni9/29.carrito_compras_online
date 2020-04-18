<?php

    require_once 'ModeloBase.php';

    class Usuario extends ModeloBase
    {
        public $nombre;
        public $apellido;
        public $email;
        public $pass;

        public function __construct()
        {
            parent::__construct();
        }
        
        function getNombre() {
            return $this->nombre;
        }

        function getApellido() {
            return $this->apellido;
        }

        function getEmail() {
            return $this->email;
        }

        function getPass() {
            return $this->pass;
        }

        function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        function setApellido($apellido) {
            $this->apellido = $apellido;
        }

        function setEmail($email) {
            $this->email = $email;
        }

        function setPass($pass) {
            $this->pass = $pass;
        }

    }

?>