
<?php

class Persona
{
    private $nombre;
    private $edad;
    private $ciudad;

    public function __construct($nombre, $edad, $ciudad)
    {
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->ciudad=$ciudad;
    }

    
    //CUANDO SE CREA UN OBJETO PERSONA Y ESE OBJETO LLAMA A UN METODO QUE NO EXISTE, AUTOMATICAMENTE EJECUTA LA FUNCION __call("nombre del metodo que llama", "los argumentos del metodo que llama")

    public function __call($name, $argumento)
    {
        // echo "No existe el metodo";
        // return "No existe el metodo";

        $prefix_metodo = substr($name,0,3);//RECORTA EL NOMBRE DEL METODO getNombre (get)

        if ($prefix_metodo == "get") {
            $nombre_metodo = substr(strtolower($name),3);//CONVIERTE EN MINUSCULA EL METODO getNombre y saca la palabra nombre

            // var_dump($nombre_metodo);

            if (!isset($this->$nombre_metodo)) {//SI NO EXISTE LA PROPIEDAD
                echo "El metodo no existe";
                // return "El metodo no existe";
            }

            // return $this->$nombre_metodo;//ES LO MISMO QUE HACER THIS->NOMBRE
            echo $this->$nombre_metodo;//ES LO MISMO QUE HACER THIS->NOMBRE
        }
        else{
            // return "El metodo no existe";
            echo "El metodo no existe";
        }
    }

}


$persona = new Persona("Paco",66,"Madrid");

//Error la propiedad nombre es private y getNombre no existe
// $persona->nombre;
$persona->getNombre();
echo "<br>";
$persona->getEdad();
echo "<br>";
$persona->getCiudad();
echo "<br>";
$persona->getHola();


?>