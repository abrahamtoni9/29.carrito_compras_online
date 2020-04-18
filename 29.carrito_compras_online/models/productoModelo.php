<?php

class ProductoModelo
{
    private $id;
    private $categoria_id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $rol;
    private $imagen;
    private $db;

    
    public function __construct()
    {
        //Conexion  base de datos
        $this->db=Database::connect();
    }
    
    function getId() {
        return $this->id;
    }

    function getCategoria_id() {
        return $this->categoria_id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getStock() {
        return $this->stock;
    }

    function getOferta() {
        return $this->oferta;
    }

    function getRol() {
        return $this->rol;
    }

    function getImagen() {
        return $this->imagen;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCategoria_id($categoria_id) {
        $this->categoria_id = $categoria_id;
    }

    function setNombre($nombre) {
        $this->nombre = $this->db->real_escape_string($nombre);//para no meter comillas
    }

    function setDescripcion($descripcion) {
        // $this->descripcion = $descripcion;
        $this->descripcion = $this->db->real_escape_string($descripcion);//para no meter comillas
    }
    
    function setPrecio($precio) {
        $this->precio = $this->db->real_escape_string($precio);//para no meter comillas
    }
    
    function setStock($stock) {
        $this->stock = $this->db->real_escape_string($stock);//para no meter comillas
    }
    
    function setOferta($oferta) {
        $this->oferta = $this->db->real_escape_string($oferta);//para no meter comillas
    }
    
    function setRol($rol) {
        $this->rol = $this->db->real_escape_string($rol);//para no meter comillas
    }
    
    function setImagen($imagen) {
        $this->imagen = $this->db->real_escape_string($imagen);//para no meter comillas
    }




    
    public function getAll()
    {
        $productos = $this->db->query("SELECT * FROM productos ORDER BY id DESC");
        return $productos;
    }   
    
    public function getAllCategoria()
    {
        $sql = "SELECT p.*, c.nombre AS 'catNombre' FROM productos p"
                ." INNER JOIN categorias c ON c.id = p.categoria_id "
                ." WHERE p.categoria_id = {$this->getCategoria_id()} "
                ." ORDER BY id DESC";

        $productos = $this->db->query($sql);
        return $productos;
    }   


    public function getRandom($limit)
    {
        $productos = $this->db->query("SELECT * FROM productos ORDER BY RAND() LIMIT $limit");
        return $productos;
    }   

    public function getOne()
    {
        $producto = $this->db->query("SELECT * FROM productos WHERE id={$this->getId()}");
        return $producto->fetch_object();
    }   

    
    public function save()
    {
        $sql = "INSERT INTO productos VALUES(null,{$this->getCategoria_id()},'{$this->getNombre()}','{$this->getDescripcion()}',{$this->getPrecio()},{$this->getStock()},null,CURDATE(),'{$this->getImagen()}')";
        
        // $sql = "INSERT INTO productos VALUES(null,{$this->getCategoria_id()},'{$this->getNombre()}','{$this->getDescripcion()}',{$this->getPrecio()},{$this->getStock()},null,CURDATE(),NULL";
        

        $save = $this->db->query($sql);
        
        // var_dump($sql);
        // echo '<br>';
        // var_dump($save);
        // echo '<br>';
        // echo  $this->db->error;
        // die();
        
        $result = false;
        if($save)
        {
            $result = true;
        }

        return $result;
    }
    
    public function edit()
    {
        $sql = "UPDATE productos SET categoria_id={$this->getCategoria_id()}, nombre ='{$this->getNombre()}', descripcion = '{$this->getDescripcion()}', precio = {$this->getPrecio()}, stock = {$this->getStock()}";

        if($this->getImagen() != null )
        {
            $sql .= ", imagen = '{$this->getImagen()}'";
        }
        // $sql .= "WHERE  id = {$this->getId()};";
        $sql .= " WHERE  id = {$this->id};";
    

        $save = $this->db->query($sql);
        
        // var_dump($sql);
        // echo '<br>';
        // var_dump($save);s
        // echo '<br>';
        // echo  $this->db->error;
        // die();
        
        $result = false;
        if($save)
        {
            $result = true;
        }

        return $result;
    }
    
    
    public function delete()
    {
        $sql = "DELETE FROM  productos WHERE id = {$this->id}";
        $delete = $this->db->query($sql);
        
        $result = false;
        if($delete)
        {
            $result = true;
        }
    
        return $result;
    }
    
}