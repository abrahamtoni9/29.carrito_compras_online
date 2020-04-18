<?php



require_once 'autoload.php';    
//require_once 'clases/usuario.php';    
 
//ESPACIOS DE NOMBRES Y PAQUETES
//EL ULTIMO PARAMETRO USA UN ALISAS POR QUE YA EXISTE DOS CLASES USUARIO
use MisClases\Usuario, MisClases\Categoria, MisClases\Entrada, PanelAdministrador\Usuario as UsuarioAdmin;
//use MisClases\Categoria;
//use MisClases\Entrada;

class Principal
{
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct()
    {
        $this->usuario = new Usuario();
//        $this->usuario = new MisClases\Usuario();
        $this->categoria = new Categoria();
//        $this->categoria = new MisClases\Categoria();
        $this->entrada = new Entrada();
//        $this->entrada = new MisClases\Entrada();
    }
    
    function getUsuario() {
        return $this->usuario;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getEntrada() {
        return $this->entrada;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setEntrada($entrada) {
        $this->entrada = $entrada;
    }
    
    function informacion()
    {
        echo "Clase :".__CLASS__."<br>";
        echo "Archivo : ".__FILE__."<br>";
        echo "Metodo : ".__METHOD__."<br>";
        echo "Directorio : ".__DIR__."<br>";
    }


}

$principal = new Principal();
$principal ->informacion();
//var_dump($this->usuario);
//echo $principal->usuario;
//echo $principal->categoria;
// var_dump($principal->usuario);
// echo "<br>";
// var_dump($principal->categoria);
// echo "<br>";
// var_dump($principal->entrada);
// echo "<br>";

$usuario = new PanelAdministrador\Usuario();
$usuario->informacion();    
// $usuario = new UsuarioAdmin();
// //var_dump($usuario);

// echo "<br>";
// echo "<br>";



//CON ESTE METODO VEMOS TODOS LOS METODOS QUE TIENE LA CLASE 
// var_dump(get_class_methods($usuario));
// echo "<br>";
// echo "<br>";

// //CON ESTE METODO VEMOS TODOS LOS METODOS QUE TIENE LA CLASE 
// var_dump(get_class_methods($principal));
// echo "<br>";
// echo "<br>";


//BUSQUEDA DEL METODO Y SU POSICION EN EL ARRAY
// $metodo = get_class_methods($principal);
// $busqueda = array_search("setEntrada", $metodo);
// echo "Posicion en el array del metodo setEntrada : ";
// var_dump($busqueda);
// echo "<br>";
// echo "<br>";

//COMPROBAR SI EXISTE LA CLASE, SI COLOCO @ ME ESCONDE LOS WARNING
$clase = @class_exists('PanelAdministrador\Usuario1');
if ($clase) {
        echo "<h1>La clase SI existe</h1>";
}
else 
{
        echo "<h1>La clase NO existe</h1>";

}


?>