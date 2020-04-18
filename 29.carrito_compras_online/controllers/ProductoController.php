<?php

    require_once 'models/productoModelo.php';

    class ProductoController
    {

        public function index()
        {

            $producto = new ProductoModelo();
            $productos = $producto->getRandom(6);

            // var_dump($productos);
            // var_dump($productos->fetch_object());
            // var_dump($productos->num_rows);

            require_once 'views/producto/destacado.php';
        }

        public function ver()
        {
            
            if (isset($_GET['id'])) {//EXISTE VARIABLE ID EN LA URL

                $id = $_GET['id'];
                
                $producto = new ProductoModelo();

                $producto->setId($id);

                $pro = $producto->getOne();

            }
            
            require_once 'views/producto/ver.php';

        }

        public function gestion()
        {
            Utils::isAdmin(); 
            
            $producto = new ProductoModelo();
            $productos = $producto->getAll();
            
            $p = $productos->fetch_object();
            // var_dump($p);
            // var_dump($productos->fetch_object());
            // die();

            require_once 'views/producto/gestion.php';
            
        }
        
        public function crear()
        {
            Utils::isAdmin(); 


            
            require_once 'views/producto/crear.php';
        }


        public function save()
        {
            Utils::isAdmin();
            if (isset($_POST)) {
                // var_dump($_POST);

                $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : false; 
                $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false; 
                $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false; 
                $precio = isset($_POST['precio']) ? $_POST['precio'] : false; 
                $stock = isset($_POST['stock']) ? $_POST['stock'] : false; 
                // $imagen = isset($_POST['fecha']) ? $_POST['fecha'] : false; 
                
                if ($categoria && $nombre && $descripcion && $precio && $stock) {
                    $producto = new ProductoModelo();

                    $producto->setNombre($nombre);
                    $producto->setCategoria_id($categoria);
                    $producto->setPrecio($precio);
                    $producto->setDescripcion($descripcion);
                    $producto->setStock($stock);
                    
                    //GUARDAR IMAGEN
                    if (isset($_FILES['imagen'])) {
                        
                        $file = $_FILES['imagen'];
                        $filename = $file['name'];
                        $mimetype = $file['type'];
    
                        // var_dump($file);
                        // die();
    
                        if ($mimetype == 'image/jpg' || $mimetype == 'image/jpeg' || $mimetype == 'image/png' || $mimetype == 'image/git' ) {
                            if (!is_dir('uploads/images')) {
                                mkdir('uploads/images', 0777, true);
                            }
                            move_uploaded_file($file['tmp_name'], 'uploads/images/'.$file['name']);
                            $producto->setImagen($filename);
                        }
                    }

                    // var_dump($_GET['id']);
                    // die();
                    
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $producto->setId($id);
                        $save = $producto->edit();
                    }
                    else
                    {
                        $save = $producto->save();
                    }


                    // var_dump($producto);
                    // var_dump($save);
                
                    // echo $producto->db->error;
                    // die();



                    if ($save) {
                        $_SESSION['producto'] = 'complete';
                    }
                    else
                    {
                        $_SESSION['producto'] = 'failed';
                    }
                    
                }
                else
                {
                    $_SESSION['producto'] = 'failed';
                }
                
            }
            else
            {
                $_SESSION['producto'] = 'failed';
            }

            header("Location:".base_url."Producto/gestion");
        }

        
        
        public function editar()
        {
            // var_dump($_GET);
            Utils::isAdmin();
            if (isset($_GET['id'])) {

                $id = $_GET['id'];
                
                $edit= true;
                
                $producto = new ProductoModelo();

                $producto->setId($id);

                $pro = $producto->getOne();

                require_once 'views/producto/crear.php';
            }
            else
            {
                header("Location:".base_url."Producto/gestion");

            }


        }
        
        
        public function eliminar()
        {
            // var_dump($_GET);
            Utils::isAdmin();

            if (isset($_GET['id'])) {
                $producto = new ProductoModelo();
                $producto->setId($_GET['id']);
                $delete = $producto->delete();
                
                if ($delete) {
                    $_SESSION['delete'] = 'complete';
                }
                else
                {
                    $_SESSION['delete'] = 'failed';
                }
            }
            else
            {
                $_SESSION['delete'] = 'failed';
            }
            header("Location:".base_url."Producto/gestion");
            
        }


    }

    

?>