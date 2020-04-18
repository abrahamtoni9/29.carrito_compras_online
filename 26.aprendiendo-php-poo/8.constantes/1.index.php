<?php

class Usuario
{
    
    //CONSTANTES DE POR SI SON ESTATICOS Y CASI SIEMPRE VAN EN MAYUSCULA
    const URL_COMPLETA = "HTPP://localhost";
    public $email;
    public $password;
    
    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

}

$usuario = new Usuario();
//SE ACCEDE A UNA PROPIEDAD DE LA MISMA FORMA QUE UNA PROPIEDAD ESTATICA
echo $usuario::URL_COMPLETA."<br>";
//NO SE PUEDE ACCEDE DE ESTA  FORMA
echo $usuario->URL_COMPLETA."<br>";

//SE PUEDE ACCEDER SIN INSTANCIAR LA CLASE USUARIO Y ACCEDIENDO DIRECTO A LA CONSTANTE
//AL SER CONSTANTE ESTA DEFINIDA A NIVEL DE CLASE(GLOBAL) Y NO A NIVEL DE OBJETO, como sucede con las propiedades de public $email que son a nivel de objeto
echo Usuario::URL_COMPLETA."<br>";

var_dump($usuario);


?>