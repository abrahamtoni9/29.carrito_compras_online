<?php

class PedidoModelo
{
    private $id;
    private $usuario_id;
    private $provincia;
    private $localidad;
    private $direccion;
    private $coste;
    private $estado;
    private $fecha;
    private $hora;
    private $db;

    
    public function __construct()
    {
        //Conexion  base de datos
        $this->db=Database::connect();
    }
    
    function getId() {
        return $this->id;
    }

    function getUsuario_id() {
        return $this->usuario_id;
    }

    function getProvincia() {
        return $this->provincia;
    }

    function getLocalidad() {
        return $this->localidad;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getCoste() {
        return $this->coste;
    }

    function getEstado() {
        return $this->estado;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getHora() {
        return $this->hora;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsuario_id($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

    function setProvincia($provincia) {
        $this->provincia = $this->db->real_escape_string($provincia);
    }

    function setLocalidad($localidad) {
        $this->localidad = $this->db->real_escape_string($localidad);
    }

    function setDireccion($direccion) {
        $this->direccion = $this->db->real_escape_string($direccion);
    }

    function setCoste($coste) {
        $this->coste = $coste;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }

    
    
    
    //FUNCTION PARA SACAR TODOS LOS PEDIDOS
    public function getAll()
    {
        $productos = $this->db->query("SELECT * FROM pedidos ORDER BY id DESC");
        return $productos;
    }  


    //FUNCION PARA SACAR UN PEDIDO
    public function getOne()
    {
        $producto = $this->db->query("SELECT * FROM pedidos WHERE id={$this->getId()}");
        return $producto->fetch_object();
    }   


    //FUNCION PARA SACAR EL ID DEL ULTIMO PEDIDO
    public function getOneByUser()
    {

        //SACAMOS LOS DATOS DE LA CABECERA Y DETALLE DEL PEDIDO
        $sql = "SELECT p.id, p.coste FROM pedidos p ".
           //" INNER JOIN lineas_pedidos lp on lp.pedido_id = p.id".
           " WHERE p.usuario_id={$this->getUsuario_id()} ORDER BY p.id DESC LIMIT 1";
        $pedido = $this->db->query($sql);

        // echo $sql;
        // echo $this->db->error;
        // die();

        return $pedido->fetch_object();
    } 



    //FUNCION PARA SACAR EL ID DE TODOS LOS  PEDIDOS DE UN USUARIO
    public function getAllByUser()
    {

        //SACAMOS LOS DATOS DE LA CABECERA Y DETALLE DEL PEDIDO
        $sql = "SELECT p.* FROM pedidos p ".
           " WHERE p.usuario_id={$this->getUsuario_id()} ORDER BY p.id DESC";//ordenado del ultimo al mas nuevo pedido
        $pedido = $this->db->query($sql);

        // echo $sql;
        // echo $this->db->error;
        // die();

        return $pedido;
    } 
    
    
    public function getProductosByPedido($id)
    {
        // $sql = "SELECT * FROM productos". 
        // " WHERE id IN(SELECT producto_id FROM lineas_pedidos WHERE pedido_id = {$id})";

        $sql = "SELECT pr.*, lp.unidades FROM productos pr".
            " INNER JOIN lineas_pedidos lp ON pr.id = lp.producto_id".
            "  WHERE  lp.pedido_id = {$id}";

        $productos = $this->db->query($sql);

        // echo $sql;
        // echo $this->db->error;
        // die();

        return $productos;
    }


    
    public function save()
    {
        $sql = "INSERT INTO pedidos VALUES(null,{$this->getUsuario_id()},'{$this->getProvincia()}','{$this->getLocalidad()}','{$this->getDireccion()}',{$this->getCoste()},'confirm',CURDATE(),CURTIME())";
        
        $save = $this->db->query($sql);
        
        //  var_dump($sql);
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
    
    
    public function save_linea()
    {
        // SACAR EL ULTIMO ID DEL INSERT DE LA CABECERA
        $sql = "SELECT LAST_INSERT_ID() AS 'pedido' "; //tenemos el ultimo id de pedido
        $query = $this->db->query($sql);
        $pedido_id = $query->fetch_object()->pedido; //accedo a la propiedad pedido id
        
        // var_dump($pedido_id);
        // die();
        
        foreach ($_SESSION['carrito'] as $elemento) {
            $producto = $elemento['producto'];
            
            $insert = "INSERT INTO lineas_pedidos VALUES(null, {$pedido_id}, {$producto->id}, {$elemento['unidades']})";
            
            $save = $this->db->query($insert);

            // var_dump($producto);
            // var_dump($insert);
            // echo $this->db->error;
            // die();

            $result = false;
            if($save)
            {
                $result = true;
            }
            
            return $result;
            
        }
        
    }

    
    
}