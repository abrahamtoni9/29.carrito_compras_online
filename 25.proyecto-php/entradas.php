
<?php require_once 'include/cabecera.php'?>

<!-- BARRA LATERAL -->
<?php require_once 'include/lateral.php'?>
            
            
        

<!-- CAJA PRINCIPAL -->
<div id='principal'>
    <h1>Todas las entradas</h1>

    <?php
        $entradas = conseguirEntradas($db, null);
        //var_dump($entradas);
        if (!empty($entradas)):
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
        endif;
    ?>
</div>

    
<!-- PIE DE PAGINA -->
<?php require_once 'include/pie.php'; ?>
   
</body>
</html>