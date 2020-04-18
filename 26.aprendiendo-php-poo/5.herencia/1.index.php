<?php

//HERENCIA : La posibilida de compartir atributos y metodos entre clases 

class Persona{

    public $nombre;
    public $apellido;
    public $altura;
    public $edad;
    
    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getAltura() {
        return $this->altura;
    }

    function getEdad() {
        return $this->edad;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }

    public  function hablar()
    {
        return 'Estoy hablando';
    }
    
    public  function caminar()
    {
        return 'Estoy caminando';
    }
}

class Informatico extends Persona
{
    
    public $lenguajes;
    public $experienciaProgramador;
    
    public  function sabeLenguaje($lenguajes)
    {
        $this ->lenguajes = $lenguajes;
        
        return $this ->lenguajes;
    }
    
    public  function programar()
    {
        return 'Soy programador';
    }
    
    public  function repararOrdenador()
    {
        return 'Reparar ordenador';
    }
    
    public  function hacerOfimatica()
    {
        return 'Estoy escribiendo en word';
    }
}


class TecnicoRedes extends Informatico
{
    public $auditarRedes;
    public $experienciaRedes;
    
    public  function auditoria()
    {
        return 'Estoy auditando una red';
    }
}



?>