<?php

    class Usuario
    {
        public $nombre;
        public $email;

        public function __construct()
        {
            $this->nombre = "Victor Robles";
            $this->email     = "victor@hotmail.com";
            echo "Creando Instancia del objeto creada<br>";
        }

        public function __toString()
        {
            return "Hola, {$this->nombre}, estas registrado como {$this->email}";
        }


        public function __destruct()
        {
            echo "<br>Destruyendo el objeto creado";
        }

    }

    $usuario = new Usuario();

    // echo $usuario->email;

    //EL OBJECTO CREADO USUARIO NO SE PUEDE IMPRIMIR COMO STRING, EN ESE CASO DEBEMOS USAR LA FUNCTION __TOSTRING PARA IMPRIMIR COMO STRING EL OBJETO
    echo $usuario

?>