<?php

    class database
    {
        public static function conectar()
        {
            $conexion = new mysqli("localhost","root","","notas_master","3306");//ES LO MISMO QUE mysqli_connect
            $conexion->query("SET NAMES 'UTF8'"); //(conexion,consulta)
            return $conexion;
        }
    }