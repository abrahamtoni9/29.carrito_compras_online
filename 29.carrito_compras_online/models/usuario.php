<?php

class UsuarioModelo
{
    private $id;
    private $nombre;
    private $apellido;
    private $email;
    private $pass;
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

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getEmail() {
        return $this->email;
    }

    function getPass() {
        return password_hash($this->db->real_escape_string($this->pass), PASSWORD_BCRYPT, ['cost'=>4]);
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

    function setNombre($nombre) {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    function setApellido($apellido) {
        $this->apellido = $this->db->real_escape_string($apellido);
    }

    function setEmail($email) {
        $this->email = $this->db->real_escape_string($email);
    }

    function setPass($pass) {
        // $this->pass = password_hash($this->db->real_escape_string($pass), PASSWORD_BCRYPT, ['cost'=>4]);
        $this->pass = $pass;
    }

    function setRol($rol) {
        $this->rol = $rol;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }
    

    public function save()
    {
        $sql = "INSERT INTO usuarios VALUES(null,'{$this->getNombre()}','{$this->getApellido()}','{$this->getEmail()}','{$this->getPass()}','user', null)";
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

    public function login()
    {
        $result = false;
        

        $email = $this->email;
        $pass = $this->pass;


        //comprobar si existe el usuario
        $sql= "SELECT * FROM  usuarios WHERE email='$email'";
        $login = $this->db->query($sql);

        if($login && $login->num_rows == 1)
        {
            // conseguir los datos de login
            $usuario = $login->fetch_object();

            //verificar la pass, comparar las pass del formulario con la pass de la bd
            $verify = password_verify($pass, $usuario->pass);

            if ($verify) {
                $result = $usuario;
            }
            
        }
        return $result;
    }

}