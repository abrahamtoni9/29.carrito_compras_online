<?php

session_start(); 

if(isset($_SESSION['usuario']))//si existe la sesion de usuario logueado
{
    session_destroy(); //destruye sesion y cierra la sesion
    header('Location: 1.index.php');
}


?>