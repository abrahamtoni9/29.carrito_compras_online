<?php

    
    trait Utilidades
    {   
        public  function mostrarNombre()
        {
            echo "<h1>El nombre es : ".$this->nombre."</h1>";
        }
    }

    class Coche
    {
        public  $nombre;
        public  $marca;
        
        use Utilidades;
    }

    class Persona
    {
        public $nombre;
        public $apellido;
        use Utilidades;
    }

    class VideoJuego
    {
        public $nombre;
        public $anio;
        use Utilidades;
    }

    $persona = new Persona();
    $persona->nombre = "Antonio Machado";
    $persona->mostrarNombre();
    
    $coche = new Coche();
    $coche->nombre = "Ferrari";
    $coche->mostrarNombre();
    
    $videojuego = new VideoJuego();
    $videojuego->nombre = "GTA 4";
    $videojuego->mostrarNombre();

//    var_dump($coche);
    
?>