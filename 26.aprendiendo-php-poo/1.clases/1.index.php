<?php

//DEFINIR UNA CLASE, MOLDE PARA CREAR MAS OBJETO DE TIPO COCHE CON CARACTERISTICA PARECIDA

class Coche 
{
    //ATRIBUTOS O PROPIEDADES COMO SE CONOCE COMO VARIABLES
    public $color = 'rojo';
    public $marca = 'Ferrari';
    public $modelo = 'Aventador';
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;

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


}// fin  definicion  de la clase

//Crear objetos / instanciar la
$coche = new Coche();

// var_dump($coche);

//IMPRIMIR LOS VALORES ACCEDIENDO A LOS ATRIBUTOS ATRAVEZ DE LOS METODOS DE LA CLASE COCHE 
$coche->setColor("Amarillo");
echo $coche->getColor()."<BR>";
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();
echo "La velocidad del coche es".$coche->getVelocidad();

$coche1 = new Coche();
$coche1->setColor("Verde");
$coche1->setModelo("Gallardo");
var_dump($coche);
var_dump($coche1);


?>