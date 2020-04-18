<?php

    require_once 'models/categoriaModelo.php';
    require_once 'models/productoModelo.php';


    class CategoriaController
    {
        public function index()
        {
            // echo 'Controlador categoria, action index';

            Utils::isAdmin(); 
            $categoria = new CategoriaModelo();

            $categorias=$categoria->getAll();

            require_once 'views/categoria/index.php';
        }
        
        public function crear()
        {
            Utils::isAdmin(); 
            require_once 'views/categoria/crear.php';
        }
        
        public function save()
        {
            Utils::isAdmin();
            
            if (isset($_POST) && isset($_POST['nombre'])) {
                //guardar la categoria en bd
                
                $categoria = new CategoriaModelo();
                $categoria->setNombre($_POST['nombre']);
                
                // var_dump($categoria->getNombre());
                // die();
                
                
                $categoria->save();
                
                
            }
            header("Location:".base_url."Categoria/index");
            
        }
        
        public function ver()
        {
            if (isset($_GET['id'])) {
                // var_dump($_GET['id']);

                //conseguir categoria
                $id = $_GET['id'];
                $categoria = new CategoriaModelo();
                $categoria->setId($id);
                $categoria = $categoria->getOne();

                // var_dump($categoria);


                //conseguir productos
                $producto = new ProductoModelo();
                $producto->setCategoria_id($id);
                $productos = $producto->getAllCategoria();
            }

            require_once 'views/categoria/ver.php';

        }

    }

    

?>