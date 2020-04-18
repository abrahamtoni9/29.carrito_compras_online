<?php namespace PanelAdministrador;

class Usuario
    {
        public $nombre;
        public $email;

        public function __construct()
        {
            $this->nombre = "Edgar Benitez";
            $this->email = "edgar@hotmail.com";
        }

        function informacion()
        {
            echo "Nombre de namespace : ".__NAMESPACE__ ."<br>";
        }

    }

