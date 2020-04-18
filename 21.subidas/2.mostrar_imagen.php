<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- 1. Creamos una variable y le asignamos la funcion que abra el directorio de images
        2. preguntamos si abrio correctamente el directorio es true
        3. Iteramos (mientras la lectura del directorio sea distinto a false entonces vamos recorrer todos los archivos dentro del directorio)
        4. Luego preguntamos si el archivo que estamos recorriendo no es distinto a punto '.' y ademos es diferente a '..' (. es el directorio y .. es salida al directorio eso lo lee y lo muestra) 
    -->


    <h1>Subida de Archivo</h1>
    <form action="upload.php" method = "POST" enctype = "multipart/form-data">
        <input type="file"  name="archivo">
        <input type="submit"  value="Enviar">
        <img src="images/1.TIPO DE DATOS.jpg" alt="">

    </form>

    <h1>Litado de Imagenes</h1>
    <?php
        $gestor = opendir('./images');//directorio de todas las fotos
        if ($gestor) 
        ://si abrio correctamente es true
            while(($image = readdir($gestor) !== false))
            :
                if($image != '.' && $image != '..')
                :
                    echo "<img src='images/$image' width='200px'/><br/>";
                endif;
            endwhile;
        endif;
        // else :
        //     echo 'No se puede abrir la carpeta';
        
        
    ?>
</body>
</html>