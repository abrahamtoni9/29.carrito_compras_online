<?php


class Coche 
{
    //ATRIBUTOS O PROPIEDADES COMO SE CONOCE COMO VARIABLES
    //PUBLIC : podemos acceder desde cualquier lugar, dentro de la clase actual, dentro de clases que hereden esta clase o fuera  de la clase
    public $color;

    //PROTECTED : podemos acceder desde la clase que lo define y desde clase que hereden esta clase
    protected $marca;

    //PRIVATE : unicamente se puede acceder desde esta clase 
    private $modelo;
    public $velocidad;
    public $caballaje;
    public $plazas;


    //CONTRUCTOR

    // public function __construct()
    // {
    //     $this->color = 'Rojo';
    //     $this->marca = 'Audi';
    //     $this->modelo = 'Aventador';
    //     $this->velocidad = 300;
    //     $this->caballaje = 500;
    //     $this->plazas = 2;
    // }



    public function __construct($color, $marca, $modelo, $velocidad,$caballaje, $plazas)
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }

    //METODOS, ACCIONES
    public function getColor()
    {
        //BUSCA DENTRO DE LA CLASE COCHE LA PROPIEDAD COLOR
        return $this->color; 
    }
   
    public function getModelo()
    {
        //BUSCA DENTRO DE LA CLASE COCHE LA PROPIEDAD COLOR
        return $this->modelo; 
    }

    public function setColor($color)
    {
        //$this -> color ACCEDE A LA PROPIEDAD DE LA CLASE COCHE EL COLOR
        $this->color = $color;
    }
   
    public function setModelo($modelo)
    {
        //$this -> color ACCEDE A LA PROPIEDAD DE LA CLASE COCHE EL COLOR
        $this->modelo = $modelo;
    }
   
    public function setMarca($marca)
    {
        //$this -> color ACCEDE A LA PROPIEDAD DE LA CLASE COCHE EL COLOR
        $this->marca = $marca;
    }

    public function acelerar()
    {
        $this->velocidad++;
    }


    public function frenar()
    {
        $this->velocidad--;
    }

    public function getVelocidad()
    {

        return $this->velocidad;
    }
}

?>