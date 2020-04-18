<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validacion de formulario</title>
</head>
<body>

<!-- 
    1. Creamos el formulario 
    2. Enviamos por pos los datos 
    3. Creamos otro formulario que va a recibir los datos y los procesa procesar_formulario.php
    4. pregunta si no estan vacios esos datos
    5. Si no estan redirecciona a validacion con un valor de error 
    6. pregunta si existe esa variable error que viene de procesar_formulario.php
    7. asigna a la variable $error el valor del paramtro 
    8. muestra el mensaje si los campos estan vacios
    9. se hace la validacion en la pagina procesar_formulario.php para cada campo y se le asigan a la variabl $error un valor deacuerdo de donde entre en el if de la validacion
    10. El valor de error retorna a la pagina validacion y pregunta por si es igual a cada valor de error para que muestre en pantalla el echo

-->


    <h1>Validar formulario en PHP</h1>

    <?php
        if(isset($_GET['error']))
        {
            $error = $_GET['error'];
            if ($error == 'faltan_valores') {
                echo "<strong style='color:red'>Introduce todos los valores en todos los campos</strong>";
            }
        }

    ?>

    <form action="procesar_formulario.php" method="POST">

    <?php 

    if(isset($_GET['error']))
    {
        if ($error == "nombre") {
            echo "<strong style='color:red'>Introduce valor sin numero para el nombre</strong><br>";
        }
    }
    ?>

    <label for="nombre">Nombre</label>
    <!-- <p><input type="text" name="nombre" required  patter="[A-Z][a-z]+"></p> -->
    <p><input type="text" name="nombre" autofocus></p>

    
    <?php 
    if(isset($_GET['error']))
    {
        if ($error == "apellido") {
            echo "<strong style='color:red'>Introduce valor sin numero para el apellido</strong><br>";
        }
    }
    ?>
    <label for="apellido">Apellido</label>
    <!-- <p><input type="text" name="apellido" required  patter="[A-Z][a-z]+"></p> -->
    <p><input type="text" name="apellido"></p>


    <?php 
    if(isset($_GET['error']))
    {
        if ($error == "edad") {
            echo "<strong style='color:red'>Introduce valor correcto para la edad</strong><br>";
        }
    }
    ?>
    <label for="edad">Edad</label>
    <!-- <p><input type="number" name="edad" required  patter="[0-9]+"></p> -->
    <p><input type="number" name="edad"></p>

    
    
    <?php 
    if(isset($_GET['error']))
    {
        if ($error == "correo") {
            echo "<strong style='color:red'>Introduce valor correcto para el correo</strong><br>";
        }
    }
    ?>
    <label for="correo">Correo</label>
    <!-- <p><input type="email" name="correo" required></p> -->
    <p><input type="text" name="correo"></p>

    <?php 
    if(isset($_GET['error']))
    {
        if ($error == "pass") {
            echo "<strong style='color:red'>El pass debe contener mas de 5 caracteres</strong><br>";
        }
    }
    ?>
    <label for="pass">Contrasena</label>
    <!-- <p><input type="password" name="pass" required></p> -->
    <p><input type="password" name="pass"  minlength="5"></p>

    <input type="submit" name="" id="" value="Enviar">


    </form>
    
</body>
</html>