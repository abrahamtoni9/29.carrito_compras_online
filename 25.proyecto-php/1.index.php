

<!-- 
2. Hacer registro de usuario en el sidebar
3. Hacer el login de usuario en el sidebar
4. Pagina de edicion de datos  en el sidebar 
5. Seccion  de creacion de categoria
6. Seccion de creacion de entradas para usuarios identificados
7. Listar entradas en la pagina de inicio
8. Pagina de edicion  de entradas  para usuarios  logueados
9. Poder borrar  entradas;
10. Anadir un buscador de entradas a la web -->

<?php require_once 'include/cabecera.php'?>

<!-- BARRA LATERAL -->
<?php require_once 'include/lateral.php'?>
            
            
        

<!-- CAJA PRINCIPAL -->
<div id='principal'>
    <h1>Ultimas entradas</h1>

    <?php
        $entradas = conseguirEntradas($db, true);
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
   
    <div id= 'ver-todas'>
        <a href="entradas.php">Ver todas las entradas</a>
    </div> 
</div>

    
<!-- PIE DE PAGINA -->
<?php require_once 'include/pie.php'; ?>
   
</body>
</html>