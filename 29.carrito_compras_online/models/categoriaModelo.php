<?php

class CategoriaModelo
{
    private $id;
    private $nombre;
    private $db;

    
    public function __construct()
    {
        //Conexion  base de datos
        $this->db=Database::connect();
    }

    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $this->db->real_escape_string($nombre);//para no meter comillas
    }


    public function getAll()
    {
        $categorias = $this->db->query("SELECT * FROM categorias ORDER BY id DESC");
        return $categorias;
    }

    public function getOne()
    {
    $categoria = $this->db->query("SELECT * FROM categorias WHERE id = {$this->getId()}");
        // return $categoria;
        return $categoria->fetch_object();
    }


    public function save()
    {
        $sql = "INSERT INTO categorias VALUES(null,'{$this->getNombre()}')";
        $save = $this->db->query($sql);
        
        // var_dump($sql);
        // echo '<br>';
        // var_dump($save);
        // echo '<br>';
        // echo mysqli_error($save);
        // echo '<br>';
        // die();
        
        $result = false;
        if($save)
        {
            $result = true;
        }

        return $result;
    }

}