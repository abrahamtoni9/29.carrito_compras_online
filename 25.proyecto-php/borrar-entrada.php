<?php

require_once 'include/conexion.php';
    
// var_dump($_SESSION['usuario']);
// die();
// var_dump($_GET['id']);
// die();

if (isset($_SESSION['usuario']) && isset($_GET['id'])) {
    $entrada_id = $_GET['id'];
    $usuario_id = $_SESSION['usuario']['id'];
    $sql = "DELETE FROM entradas WHERE usuario_id = $usuario_id AND id = $entrada_id";
    mysqli_query($db, $sql);

    // echo mysqli_error($db);
    // die();

}

header('Location: 1.index.php');

?>