<?php

    require_once 'models/productoModelo.php';

    class CarritoController
    {

        public function index()
        {
            // echo 'Controlador carrito, accion index';
            //var_dump($_SESSION['carrito']);//vemos el contenido de la sesion y cuantos objetos ahy
            // die();


            //SESION
             $carrito = $_SESSION['carrito'];



            require_once 'views/carrito/ver_carrito.php';
        }

       public function add()
       {

            
            echo 'Controlador carrito';

            if (isset($_GET['id'])) {//EXISTE VARIABLE ID EN LA URL
                    $producto_id =$_GET['id'];
            }
            else//REDIRECCIONA A LA PAGINA INICIAL
            {
                header("Location:".base_url);
            }

            if (isset($_SESSION['carrito'])) { //EXISTE LA SESION CARRITO 
                
                $counter = 0; 

                foreach($_SESSION['carrito'] as  $indice => $elemento)
                {
                    if ($elemento['id_producto'] == $producto_id) {//si hay un producto cargado en el carrito entonces aumentamos la unidades
                        $_SESSION['carrito'][$indice]['unidades']++;
                        $counter++;
                    }
                }

            }
            
            //si no existe el contador
            if(!isset($counter) || $counter == 0){
                //conseguir producto
                $producto = new ProductoModelo();
                $producto->setId($producto_id);
                $producto = $producto->getOne();


                //agegar carrito
                if (is_object($producto)) { //es objeto?
                    
                    //anade al carrito un elemento de tipo array
                    $_SESSION['carrito'][] = array(
                        "id_producto" => $producto->id, //no se puede usar getId() porque no es una instancia de un objeto puro de la bd
                        "precio" => $producto->precio,
                        "unidades" => 1,
                        "producto" => $producto  //objeto
                    );

                    //var_dump($_SESSION['carrito']);
                }
            }
            header("Location:".base_url."Carrito/index");
        }
        
        public function remove()
        {
            
        }
        
        public function delete_all()
        {
            unset($_SESSION['carrito']);
            header("Location:".base_url."Carrito/index");
       }
    }

    

?>