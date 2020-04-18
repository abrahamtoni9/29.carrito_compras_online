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
}

$principal = new Principal();
//var_dump($this->usuario);
//echo $principal->usuario;
//echo $principal->categoria;
var_dump($principal->usuario);
echo "<br>";
var_dump($principal->categoria);
echo "<br>";
var_dump($principal->entrada);
echo "<br>";

//$usuario = new PanelAdministrador\Usuario();
$usuario = new UsuarioAdmin();
var_dump($usuario);



?>