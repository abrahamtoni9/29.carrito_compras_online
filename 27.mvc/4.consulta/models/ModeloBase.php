<?php

    require_once 'config/database.php';

    class ModeloBase
    {

        public $db;

        public function __construct()
        {
            $this->db = database::conectar();//de esta forma se accede a un metodo static sin instanciar el objeto
        }


        public function conseguirTodos($tabla)
        {
            // var_dump($this->db);
            // return "Sacando todos los usuarios";


            $query = $this->db->query("SELECT * FROM $tabla ORDER BY id DESC");
            // var_dump($query);
            // die();
            // echo $query;
            return $query;
        }
    }

?>