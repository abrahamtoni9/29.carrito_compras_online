<?php  require_once 'conexion.php';?>

<?php require_once 'include/helpers.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Video Juegos</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/css.css"> -->
</head>
<body>

    <!-- CABECERA -->

    <Header id='cabecera'>

        <!-- LOGO -->
        <div id="logo">
            <a href="1.index.php">
                Blog de Video Juegos
            </a>
        </div>

    <!-- MENU -->
        <nav id='menu'>
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <?php
                    $categorias = conseguirCategorias($db);//tengo la consulta
                    if(!empty($categorias))://si no esta vacio el array categorias
                        while($categoria = mysqli_fetch_assoc($categorias)): //recorro el array asociativo                       
                ?>
                <li>
                        <a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
                </li>

                    <?php 
                            endwhile;
                        endif;
                    ?>
               
                <li>
                    <a href="index.php">Sobre Mi</a>
                </li>
                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>
        </nav>
        <!-- <div class = 'clearFix'></div> -->
    </header>


    <div id='contenedor'>