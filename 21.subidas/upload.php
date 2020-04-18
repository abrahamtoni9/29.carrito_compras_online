<?php

$archivo = $_FILES['archivo'];
//var_dump($archivo);
//die();

$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif")
{
    if(!is_dir('images'))
    {
        mkdir('images',0777);
        // mkdir('images',0777, true);
    }else{
        move_uploaded_file($archivo['tmp_name'],'images/'.$nombre);//nombre temporal, directorio con el nombre del archivo
        // header("Refresh:5; URL=1.subida.php");
        header("Refresh:5; URL=2.mostrar_imagen.php");
        echo  "<h1>Imagen subida correctamente</h1>";
    }
}
else
{
    // header("Refresh:5; URL=1.subida.php");
    header("Refresh:5; URL=2.mostrar_imagen.php");
    echo "<h1>Sube una imagen con un imagen correcto porfavor</h1>";
}

?>