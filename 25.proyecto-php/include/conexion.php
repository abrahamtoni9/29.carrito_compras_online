<?php

//conexion a la base de datos

$server = 'localhost';
$username = 'root';
$pass = '';
$database = 'blog_master';


$db = mysqli_connect($server, $username,$pass, $database);

// $conexion = mysqli_connect("localhost", "root", "", "blog_master", "3306");

mysqli_query($db,'set names "utf-8"');

//iniciar la session

if (!isset($_SESSION)) {
    session_start();
}

?>