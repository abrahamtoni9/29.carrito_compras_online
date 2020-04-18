<?php

    class Database
    {
        public static function connect()
        {
            $conexion = new mysqli("localhost","root","","tienda_master","3306");//ES LO MISMO QUE mysqli_connect
            $conexion->query("SET NAMES 'UTF8'"); //(conexion,consulta)
            return $conexion;
        }
    }