<?php

class Utils
{
    public static function deleteSession($name)
    {
        if (isset($_SESSION[$name])){
            $_SESSION[$name]=null;
            unset($_SESSION[$name]);
        }
        
        return $name;
    }


    public static function isAdmin()
    {
        if (!isset($_SESSION['admin'])) {
            header("Location:".base_url);
        }
        else
        {
            return true;
        }
    }

    public static function isIdentity()
    {
        if (!isset($_SESSION['identity'])) {
            header("Location:".base_url);
        }
        else
        {
            return true;
        }
    }


    
    public function showCategorias()
    {
        require_once 'models/categoriaModelo.php';

        $categoria = new CategoriaModelo();

        $categorias=$categoria->getAll();

        // var_dump($categorias);
        // die();

        return $categorias;
    }


    public static function statsCarrito()
    {
        $stats = array(
            'count' => 0, //contar cantidad de producto
            'total' => 0
        );

        //var_dump($_SESSION['carrito']);
        // print_r($_SESSION['carrito']);
        // print_r($stats);
        
        if(isset($_SESSION['carrito']))
        {
            // var_dump($_SESSION['carrito']);
            $stats['count'] = count($_SESSION['carrito']);//count cuenta todos los elementos de un array

            // foreach ($_SESSION['carrito'] as $index => $value) {
            foreach ($_SESSION['carrito'] as $value) {
                //SUMA AL ELEMENTO DEL ARRAY TOTAL EL PRECIO * UNIDAD CADA VEZ QUE ITERA
                $stats['total'] += $value['precio'] * $value['unidades'];
            }
        }

        return $stats;
    }
}


