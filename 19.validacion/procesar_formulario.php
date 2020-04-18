<?php

$error = "faltan_valores";

if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['correo']) && !empty($_POST['edad']))
// && !empty($_POST['pass']) 
{
    $error = "ok";

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $edad = (int)$_POST['edad'];
    $pass = $_POST['pass'];

    if (!is_string($nombre) || preg_match('/[0-9]/', $nombre)){
        $error = "nombre";
    }
    if (!is_string($apellido) || preg_match('/[0-9]/', $apellido)){
        $error = "apellido";
    }
    if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
        $error = "edad";
    }
    if (!is_string($correo) || !filter_var($correo, FILTER_VALIDATE_EMAIL)){
        $error = "correo";
    }
    // if (empty($pass) && strlen($pass)<5){
    //     $error = "pass";
    // }
    
    var_dump($_POST);
    var_dump($error);
    // die();
}else{
    $error = "faltan_valores";
}
var_dump ($nombre);

if ($error != "ok") {
    
    header("Location:1.validacion.php/?error=$error");

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validacion de formulario</title>
</head>
<body>
    <h1>Datos Validados</h1>
    <?php if ($error == 'ok'): ?>
        <p><?=$nombre?></p>
        <p><?=$apellido?></p>
        <p><?=$edad?></p>
        <p><?=$correo?></p>
    <?php endif ?>
    
</body>
</html>