<?php


class Coche 
{
    //ATRIBUTOS O PROPIEDADES COMO SE CONOCE COMO VARIABLES
    public $color;
    public $marca;
    public $modelo;
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