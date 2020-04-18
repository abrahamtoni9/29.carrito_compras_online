<?php


/*
1. Creamos la variable $abrir_archivo y abrimos el archivo ficherO_texto.txt
2. leemos el archivo y metemos en la variable $abrir_archivo
3. Imprimos el archivo utilizando while recorremos cada linea de texto 
4. Para agregar texto en el archivo usamos la funcion fwrite, para eso el permiso de abrir el archivo se debe utilizar "a+" $abrir_archivo = fopen("fichero_texto.txt","a+"), para lectura y escritura
4. cerramos el archivo con fclose
*/

//r = lectura , x = ejecucion, w = escritura, a+ = lectura y escritura
// $abrir_archivo = fopen("fichero_texto.txt","r"); 
$abrir_archivo = fopen("fichero_texto.txt","a+"); 


//recorro todas las lineas del archivo de texto 
while(!feof($abrir_archivo))
{
    //leer contenido
    $contenido = fgets($abrir_archivo);
    echo $contenido."<br>";//cada vez que salta de linea con br podemos imprimir en la sgte linea
}

//Escribir
fwrite($abrir_archivo, "texto agregado en el archivo");


fclose($abrir_archivo)


?>