<?php

//CLASES ABSTRACTAS : SON CLASES QUE NO SE PUEDEN INSTANCIAR, ES DECIR, NO PODEMOS CREAR OBJETOS CON ELLA, PERO SI LE VAMOS A UTILIZAR PARA HEREDAR DE ELLA, LA CLASE ABSTRACTA DEFINE LA ESCTRUCTURA QUE PUEDE TENER LA CLASE QUE HEREDA DE LA CLASE ABSTRACTA INCLUSo PUEDE DEFINIR FUNCIONALIDAD, ENCIMA UN METODO ABSTRACTO TBN DEBE SER DEFINIDA EN LA CLASE QUE HEREDA LA CLASE ABSTRACTA, ES DECIR, LA CLASE HIJA Y AGREGAR FUNCIONALIDAD

abstract class Ordenador
{

    //las propeedades no se pueden definir como abstracto y los metodos si, y las funciones no pueden tener las funcionalidades dentro, solo se definen y no llevan las llaves de apertura y cierre "{}" despues del "()" va el ";"
    public $encendido;
    
    abstract public function encender();
    
    public function apagar()
    {
        $this ->encendido = false;
    }

}


class PcAsus extends Ordenador
{
    public $software;
    
    public function arrancarSoftware()
    {
        $this ->software = true;
    }
    public function encender()
    {
        $this ->encendido = true;
    }

}


$ordenador = new PcAsus();
//llamando a los dos metodos se ponen a true las propiedades
$ordenador ->arrancarSoftware();
$ordenador ->encender();
//si llamamos al metodo apagar pone a false
$ordenador ->apagar ();

var_dump($ordenador);






?>