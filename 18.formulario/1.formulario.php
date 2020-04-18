<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Formulario en PHP</h1>
<form action="" action="POST" enctype="multipart/form-data">
    <!-- disable="disable"
    maxlength = "4"
    minlength = "4"
    autofocus = "autofocus"
    pattern = "[A-Z]+"
    required  = "required"
    placeholdeer = "Escriba aqui"
    value = "Escribe" -->
    <label for="nombre">Nombre</label>
    <p><input type="text" name="nombre"></p>

    
    <label for="apellido">Apellido</label>
    <p><input type="text" name="apellido"></p>

    <p></p>
    <label for="boton">Boton</label>
    <p><input type="button" name="boton" value="Dale click"></p>


    <label for="sexo">Sexo</label>
        <p>
            Hombre:<input type="checkbox" name="sexo" value="hombre" checked="checked">
            Mujer:<input type="checkbox" name="sexo" value="mujer">
        </p>


    <label for="fecha">Fecha</label>
    <p><input type="date" name="fecha"></p>


    <label for="correo">Correo</label>
    <p><input type="email" name="correo"></p>


    <label for="color">Color</label>
    <p><input type="color" name="color"></p>


    <label for="archivo">Archivo</label>
    <p><input type="file" name="archivo" multiple= "multiple"></p>


    <label for="oculto">Oculto</label>
    <p><input type="hidden" name="oculto"></p>


    <label for="numero">Numero</label>
    <p><input type="number" name="numero"></p>


    <label for="pass">Password</label>
    <p><input type="password" name="pass"></p>


    <label for="continente">Continente</label>
        <p>
            America del Sur<input type="radio" name="continente" value="America del Sur"><br>
            America del Norte<input type="radio" name="continente" value="America del Norte"><br>
            Asia<input type="radio" name="continente" value="Asia"><br>
            Europa<input type="radio" name="continente" value="Europa ">
        </p>


    <label for="direccio_url">Pagina web </label>
    <p><input type="url" name="direccio_url"></p>


    <label for="comentario">Comentario: </label><br>
    <textarea name="" id="" cols="30" rows="10" name="comentario"></textarea><br>

    <p></p>

    <p>
        Peliculas
        <select name="peliculas" id="">
            <option value="Spiderman">Spiderman</option>
            <option value="batma">Batman</option>
            <option value="super man">Super Man</option>
            <option value="gasparin">Gasparin</option>
        </select>
    </p>


    <input type="submit" value="Enviar">
</form>
    
</body>
</html>