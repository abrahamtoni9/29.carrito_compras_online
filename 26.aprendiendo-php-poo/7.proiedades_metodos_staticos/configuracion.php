<?php

class configuracion
{
    
    public static $color;
    public static $newleter;
    public static $entorno;
    
    
    //PARA ACCEDER A UNA PROPIEDAD O VARIABLE ESTATICO UTILIZAMOS EL SELF EN VEZ DE THIS
    static function getColor() {
        return self::$color;//SELF:: ES EQUIVALENTE A UTILIZAR EL THIS
    }

    static function getNewleter() {
        return self::$newleter;
    }

    static function getEntorno() {
        return self::$entorno;
    }

    static function setColor($color) {
        self::$color = $color;
    }

    static function setNewleter($newleter) {
        self::$newleter = $newleter;
    }

    static function setEntorno($entorno) {
        self::$entorno = $entorno;
    }


}



?>