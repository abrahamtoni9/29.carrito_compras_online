<?php

    require_once 'models/PedidoModelo.php';

    class PedidoController
    {
        public function hacer()
        {
            
            // echo 'controlador de pedido';
            
            require_once 'views/pedido/hacer_pedido.php';
           
        }
        
        public function add()
        {
            // var_dump($_POST);
            
            //COMPROBAR SI ESTA IDENTIFICADO
            if(isset($_SESSION['identity']))
            {
                // var_dump($_POST);

                $usuario_id = $_SESSION['identity']->id;
                // var_dump($_SESSION['identity']);
                // var_dump($usuario_id);
                $provincia = isset($_POST['provincia']) ?  $_POST['provincia'] : false;
                $direccion = isset($_POST['direccion']) ?  $_POST['direccion'] : false;
                $localidad = isset($_POST['localidad']) ?  $_POST['localidad'] : false;

                //el coste sacamos de la clase Utils
                $stats = Utils::statsCarrito();
                $coste = $stats['total'];


                // echo "$usuario_id";
                // echo "<br>";
                // echo "$provincia";
                // echo "<br>";
                // echo "$direccion";
                // echo "<br>";
                // echo "$localidad";
                // echo "<br>";
                // echo "$stats";
                // echo "<br>";

                //var_dump($coste);

                if ($localidad && $direccion && $provincia) {
                    
                    // echo "entra";
                    //GUARDAR DATOS EN LA BD
                    $pedido = new PedidoModelo(); 
                    $pedido->setUsuario_id($usuario_id);
                    $pedido->setProvincia($provincia);
                    $pedido->setLocalidad($localidad);
                    $pedido->setDireccion($direccion);
                    $pedido->setCoste($coste);
                    
                    // var_dump($pedido);
                    // die();

                    //GUARDAR CABECERA
                    $save = $pedido->save();

                    //GUARDAR DETALLE DE PEDIDO
                    $save_linea = $pedido->save_linea();
    
                    if ($save && $save_linea) {
                        $_SESSION['pedido'] = 'complete';
                    } else {
                        $_SESSION['pedido'] = 'failed';
                    }
                }
                else
                {
                    // echo "entra";
                    $_SESSION['pedido'] = 'failed';
                }

                header("Location:".base_url."Pedido/confirmado");

            }
            else
            {
                // echo 'No esxiste la sesion';

                //REDIRIGIR AL INDEX
                header("Location:".base_url);
            }

        }


        public function confirmado()
        {
            //SI EXISTE LA SESSION DEL USUARIO
            if(isset($_SESSION['identity']))
            {
                $identity = $_SESSION['identity'];//GUARDAMOS EN UNA VARIABLE
                $pedido = new PedidoModelo();
                $pedido ->setUsuario_id($identity->id);//ACCEDEMOS AL ID DE LA SESSION
                
                //CON LA VARIABLE YA PODEMOS USAR EN LA VISTA DE PEDIDO_CONFIRMADO  
                $pedido = $pedido->getOneByUser();
                


                $pedido_productos = new PedidoModelo();

                // $producto = $pedido_productos->getProductosByPedido($pedido->id);
                // var_dump($producto->fetch_object());
                
                $pedido_id = $pedido->id;
                var_dump($pedido_id);

                $productos = $pedido_productos->getProductosByPedido($pedido_id);//le pasamos el id del pedido para que pueda filtrar en la consulta en la clase pedidomodelo del metodo getProductosByPedido
            }

            require_once 'views/pedido/pedido_confirmado.php';
        }
        
        
        public function mis_pedidos()
        {

            Utils::isIdentity();

            // $ususario_id = $_SESSION['identity']->id;//ACCEDER DE ESTA MANERA SE HACE DESDE LA VERSION 5

            // $pedido = new Pedido();
            

            // //SACAR LOS PEDIDOS DEL USUARIO
            // $pedido->setUsuario_id($ususario_id);

            // $pedidos =$pedido_id->getAllByUser();


            require_once 'views/pedido/mis_pedidos.php';
        }

    }


    

?>