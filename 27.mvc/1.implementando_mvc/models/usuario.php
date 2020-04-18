<?php

    class Usuario
    {
        public $nombre;
        public $apellido;
        public $email;
        public $pass;
        
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

        public function conseguirTodos()
        {
            echo "Sacando todos los usuarios";
        }

    }

?>