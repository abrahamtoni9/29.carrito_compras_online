<?php

/**
 * 
 * 1. Para copiar usamos la funcion copy y or die si es que falla el copiado
 * 2. Para renombrar el archivo utilizamos el rename
 * 3. Para eliminar el archivo utilizamos el unlink
 * 3. Para comprobar que existe el archivo utilizamo el file_exists
 * 4. Crear y eliminar carpeta
 * 5. mostrar los archivos contenido dentro de la carpeta creada 
 * 
 */

//copy("fichero_texto.txt","texto.txt") or die("Fallo al copiar fichero");

//rename("texto.txt","cambio_nombre_archivo.txt");

//unlink("cambio_nombre_archivo.txt") or die("Error al elimiar archivo"); 

// if(file_exists("fichero_texto.txt"))
// {
//     echo "El fichero existe";
// }else{
//     echo "El fichero no existe";
    
// }


//Crear y eliminar carpeta


//crear carpeta
// if(!is_dir("carpeta_creada"))//si no existe la carpeta
// {
//     mkdir("carpeta_creada",0777) or die("No se pude crear la carpeta");//0777 todos los permisos
// }
// else
// {
//     echo "Ya existe la carpeta";
// }

//borrar directorio
//rmdir("carpeta_creada");


//mostrar los archivos contenido dentro de la carpeta creada 
if($gestor = opendir("./carpeta_creada"))//si existe la carpeta entra dentro del if
{
    while(false !== ($archivo = readdir($gestor)))//mientras ahy archivo que voy a leer dentro de la carpeta
    {
        if($archivo != "." && $archivo != ".."){//hacemos la condicion para no mostrar los puntos del directorio
            echo $archivo."<br>";//muestro los archivos 
        }
    }
}


?>