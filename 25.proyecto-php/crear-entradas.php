
<?php require_once 'include/redireccion.php'?>

<?php require_once 'include/cabecera.php'?>

<!-- BARRA LATERAL -->
<?php require_once 'include/lateral.php'?>


<!-- CAJA PRINCIPAL -->
<div id='principal'>
    <h1>Crear Entradas</h1>

    <p>Anade Nuevas Entradas al blog para que los usuarios puedan usarlas al  crear sus entradas</p>
    <br>
    <form action="guardar-entrada.php" method= 'POST'>

        <label for="titulo">Titulo</label>
        <input type="text" name = 'titulo'>
        <?php  echo isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'],'titulo'): ''//si esxiste la sesion imprime la funcion mostrarerrores ?>

        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" id="" cols="30" rows="5"></textarea>
        <?php  echo isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'],'descripcion'): ''//si esxiste la sesion imprime la funcion mostrarerrores ?>

        <label for="categoria">Categoria</label>
        <select name="categoria">
             <?php $categorias = conseguirCategorias($db);
                if(!empty($categorias)):
                    while($categoria = mysqli_fetch_assoc($categorias)):
            ?>
                <option value="<?=$categoria['id']?>"><?=$categoria['nombre']?></option>
            <?php 
                    endwhile;
                endif;
            ?>

        </select>
        <?php  echo isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'],'catergoria'): ''//si esxiste la sesion imprime la funcion mostrarerrores ?>

        <input type="submit" value= 'Guardar'>
    </form>
    <?php borrarErrores();?>

</div>    
<!-- PIE DE PAGINA -->
<?php require_once 'include/pie.php'; ?>
   