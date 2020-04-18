<?php

    //INTERFACE ES COMO LAS CLASES ABSTRACTAS  
    // Una clase abstracta puede tener métodos que sean abstractos o que no lo sean, mientras que las interfaces sólo y exclusivamente pueden definir métodos abstractos.
    // Una clase abstracta puede heredar de una sola clase (abstracta o no) mientras que una interfaz puede extender varias interfaces de una misma vez.
    // En java concretamente (ya que has puesto la etiqueta Java), en las clases abstractas la palabra abstract es obligatoria para definir un método abstracto (así como la clase). Cuando defines una interfaz, esta palabra es opcional ya que se infiere en el concepto de interfaz.
    // En una clase abstracta, los métodos abstractos pueden ser public o protected. En una interfaz solamente puede haber métodos públicos.
    // En una clase abstracta pueden existir variables static, final o static final con cualquier modificador de acceso (public, private, protected o default). En una interfaz sólo puedes tener constantes (public static final).
    // En definitiva utilizar una u otra depende de tus necesidade
    interface Ordenador
    {
        public function encender();
        public function apagar();
        public function reiniciar();
        public function desfragmentar();
        public function detectarUSB();
    }

    class Imac implements Ordenador 
    {
        private $modelo;

        function getModelo() {
            return $this->modelo;
        }

        function setModelo($modelo) {
            $this->modelo = $modelo;
        }

        //AL IMPLEMENTAR LA INTERFACE ORDENADOR DEBEMOS REDEFINIAR LOS METODOS DE LA INTERFACE
        public function encender()
        {

        }

        public function apagar()
        {

        }
        public function reiniciar()
        {

        }
        public function desfragmentar()
        {

        }
        public function detectarUSB()
        {

        }
    }

    $maquintosh = new Imac();

    $maquintosh->setModelo('Macbook pro 2020');


    echo $maquintosh->getModelo(); 
    // var_dump($maquintosh->getModelo()); 
    // var_dump($maquintosh); 

?>