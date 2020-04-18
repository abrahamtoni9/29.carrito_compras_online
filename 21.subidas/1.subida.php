<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- 1. Crear form apuntando al archivo servidor upload.php y con el atributo  enctype = "multipart/form-data"
    2. Crear dentro del form el input de tipo file
    3. en el archivo servidor leemos el archivo $archivo = $_FILES['archivo'] y hacemos el var_dump($archivo); die();
    4. configuramos en el xamp en Apache-config-php.ini, post_max_size 256M y upload_max_filesize=256M , tambien podemos configurar el timezone
    5. Preguntamos si el tipo corresponde a los formato de imagenes 
    6. luego preguntamos si no existe el directorio images, si no existe entonces crea con mkdir
    7. si existe el directorio entonces movemos la imagen que se se alzo en el directorio de images con la funcion move_uploaded_file(nombre del archivo,  direccion del directorio)
    8. modificamos el header para redireccionarnos a la clase donde se cargo la imagen, en este caso 1.subida.php desde de los 5 segundos
    
    -->


    <h1>Subida de Archivo</h1>
    <form action="upload.php" method = "POST" enctype = "multipart/form-data">
        <input type="file"  name="archivo">
        <input type="submit"  value="Enviar">

    </form>
</body>
</html>