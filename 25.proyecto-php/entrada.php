<?php //require_once 'include/conexion.php'?>
<?php require_once 'include/cabecera.php'?>
<?php require_once 'include/helpers.php'?>

    <?php 
        $entrada_actual = conseguirEntrada($db, $_GET['id']);

        // var_dump($entrada_actual);
        // die();
        
        if (!isset($entrada_actual['id'])) {
            header("Location: 1.index.php");
        }
        
        ?>


<!-- BARRA LATERAL -->
<?php require_once 'include/lateral.php'?>
            
            
        

<!-- CAJA PRINCIPAL -->
<div id='principal'>

    <?php
        //var_dump($categoria_actual);
    ?>

    <h1><?=$entrada_actual['titulo']?></h1>

    <a href="categoria.php?id=<?=$entrada_actual['categoria_id']?>">
        <h2><?=$entrada_actual['categoria']?></h2>
    </a>
    <h4><?=$entrada_actual['fecha']?> | <?= $entrada_actual['usuario']?> </h4>

    <p>
        <?=$entrada_actual['descripcion']?>
    </p>

    <?php if (isset($_SESSION['usuario']) && $_SESSION['usuario']['id'] == $entrada_actual['usuario_id']) :?>
        <a href="borrar-entrada.php?id=<?=$entrada_actual['id']?>" class= 'boton boton-rojo'>Borrar Entrada</a>
        <a href="editar-entrada.php?id=<?=$entrada_actual['id']?>" class= 'boton boton-naranja '>Editar Entrada</a>
    <?php endif;?>

</div>
    
<!-- PIE DE PAGINA -->
<?php require_once 'include/pie.php'; ?>
   
</body>
</html>