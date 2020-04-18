<?php

    class Usuario
    {
        public $nombre;
        public $email;

        public function __construct()
        {
            echo "Creando Instancia del objeto creada<br>";
        }
        public function __destruct()
        {
            echo "Destruyendo el objeto creado";
        }

    }

    $usuario = new Usuario();

    for ($i=0; $i < 50; $i++) { 
        echo $i."<br>";
    }



?>