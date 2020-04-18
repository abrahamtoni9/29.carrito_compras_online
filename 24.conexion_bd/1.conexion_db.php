<?php

//conectar a la base de datos
//$conexion = mysqli_connect($host, $user, $password, $database, $port, $socket);
$conexion = mysqli_connect("localhost", "root", "", "blog_master", "3306");


//comprobar si la conexion es correcta
if (mysqli_connect_errno())//en el caso de que devuelva false entra en el if (no se conecto) 
{
    echo "La conexion a la base de datos sql ah fallado". mysqli_connect_error();
    echo '<br>';
}
else{//se contecto
    echo "La conexion a la base de datos sql fue exitosa";
    echo '<br>';
}
//consulta para configurar  la codificacion de caracteres
//setear la codificacion de caracteres para que algun caracter especiales en la bd que nos devuelva correctamente

mysqli_query($conexion,"SET NAMES 'UTF8'" ); //(conexion,consulta)

//consulta de select desde PHP
$query = mysqli_query($conexion, 'select * from notas;');
var_dump($query);
    echo '<br>';

//$notas = mysqli_fetch_assoc($query);//(buscar asociativo) en este caso es el select (develve un registro y tenemos que recoorer)

while ($nota = mysqli_fetch_assoc($query))
{
    var_dump($nota);
    echo "<br>";
    echo $nota['descripcion'];
//    echo "<br>";
}
echo '<br>';

//Insetar en la base de datos desde PHP
$sql = 'insert into notas  values(null, "Notas de PHP", "Esta es una nota de PHP", "green")';
$insert = mysqli_query($conexion , $sql);

if($insert)//tiene que devolver true o false
{
    echo 'Datos insertado correctamente';
}else
{
    echo 'Error: '.mysqli_error($conexion);
}

?>