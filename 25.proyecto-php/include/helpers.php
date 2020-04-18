
<?php

function mostrarErrores($errores, $campo){
    $alerta = '';
    if(isset($errores[$campo]) && !empty($campo))
    {
        $alerta = "<div class = 'alerta alerta-error'>".$errores[$campo]."</div>"; 
    }
    return $alerta;
}

function borrarErrores()
{

    $borrado = false;
    if (isset($_SESSION['errores'])) {
        $_SESSION['errores'] = null;
        //$borrado = session_unset($_SESSION['errores']);
    }
    
    if (isset($_SESSION['errores_entrada'])) {
        $_SESSION['errores_entrada'] = null;
        //$borrado = session_unset($_SESSION['errores_entrada']);
    }
    
    if (isset($_SESSION['completado']))
    {
        $_SESSION['completado'] = null;
        //session_unset($_SESSION['completado']);
        
    }
    return $borrado;
}


// LISTA TODAS LAS CATEGORIAS EN EL MENU DE NAVEGACION
function conseguirCategorias($conexion)
{
    $sql = 'Select * from categorias order by id asc';
    $categorias = mysqli_query($conexion,$sql);
    $result =  array();

    if ($categorias && mysqli_num_rows($categorias) >= 1 ) {
        $result = $categorias;
    }
    return $result;
}

//LISTA LAS ENTRADAS QUE CONTIENE ESA CATEGORIA AL SELECCIONARLA EN EL MENU DE NAVEGACION
function conseguirCategoria($conexion, $id)
{
    $sql = "SELECT * FROM categorias WHERE id = $id";
    $categorias = mysqli_query($conexion,$sql);
    $resultado =  array();

    // var_dump($categorias);
    // die();

    if ($categorias && mysqli_num_rows($categorias) >= 1 ) {
        $resultado  = mysqli_fetch_assoc($categorias) ;
    }
    return $resultado;
}


function conseguirEntrada($conexion, $id)
{
    $sql = "SELECT e.*, c.nombre as 'categoria', CONCAT(u.nombre, ' ', u.apellido) AS usuario FROM entradas e ".
    " INNER JOIN categorias c on e.categoria_id = c.id ".
    " INNER JOIN usuarios u on e.usuario_id = u.id ".
    " WHERE e.id =  $id";

    $entrada = mysqli_query($conexion, $sql);

    $resultado = array();

    
    if($entrada && mysqli_num_rows($entrada) >= 1)
    {
        $resultado = mysqli_fetch_assoc($entrada);
    }

    return $resultado;   

}

function conseguirEntradas($conexion, $limit = null, $categoria = null, $busqueda = null)
{
    $sql = "SELECT e.*, c.nombre AS 'categoria' FROM entradas e ".
    "INNER JOIN  categorias c ON e.categoria_id = c.id ";

    // $sql = "SELECT e.*, c.* FROM entradas e INNER JOIN  categorias c ON e.categoria_id = c.id ORDER BY e.id DESC LIMIT 4"; 

    if (!empty($categoria)) {
        $sql.= "WHERE  e.categoria_id = $categoria";
    }

    if (!empty($busqueda)) {
        $sql.= "WHERE  e.titulo like '%$busqueda%' ";
    }

    $sql.= " ORDER BY e.id DESC";

    if($limit)
    {
        //$sql = $sql.'LIMIT 4'
        $sql.= ' LIMIT 4';
    }


    $entradas = mysqli_query($conexion,$sql);

        // var_dump($entradas);
        // die();  

    $resultado = array();

    if($entradas && mysqli_num_rows($entradas) >= 1)
    {
        $resultado = $entradas;
    }

    return $resultado;
}


?>