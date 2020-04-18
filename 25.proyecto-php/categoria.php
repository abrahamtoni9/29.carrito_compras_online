<?php //require_once 'include/conexion.php'?>
<?php require_once 'include/cabecera.php'?>
<?php require_once 'include/helpers.php'?>

    <?php 
        $categoria_actual = conseguirCategoria($db, $_GET['id']);
        
        if (!isset($categoria_actual['id'])) {
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

    <h1>Entradas de <?=$categoria_actual['nombre']?></h1>

    <?php
        $entradas = conseguirEntradas($db, null, $_GET['id']);
        //var_dump($entradas);
        if (!empty($entradas && mysqli_num_rows($entradas) >= 1)):
            while($entrada = mysqli_fetch_assoc($entradas)):
    ?>                
                <article class= 'entrada'>
                    <a href="entrada.php?id=<?=$entrada['id']?>">
                        <?php // var_dump($entrada);?>
                        <h2><?=$entrada['titulo']?></h2>
                        <span class='fecha'><?= $entrada['categoria'].' | '.$entrada['fecha'];//categoria es elalias del campo c.nombre?></span>
                        <p>
                            <?= substr($entrada['descripcion'],0,150)."....."?>
                        </p>
                    </a>
                </article>
    <?php
            endwhile;
        else:              
    ?>
                <div class= 'alerta'>No hay entrada en esta categoria</div>
    <?php
    
        endif;
    ?>
</div>

    
<!-- PIE DE PAGINA -->
<?php require_once 'include/pie.php'; ?>
   
</body>
</html>