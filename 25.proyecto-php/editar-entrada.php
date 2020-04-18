<?php //require_once 'include/conexion.php'?>
<?php require_once 'include/redireccion.php'?>
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
    <h1>Editar Entradas</h1>

    <p>Edita tu entrada <?=$entrada_actual['titulo']?> </p>
    <br>
    <form action="guardar-entrada.php?editar=<?=$entrada_actual['id']?>" method= 'POST'>

        <label for="titulo">Titulo</label>
        <input type="text" name = 'titulo' value='<?=$entrada_actual['titulo']?>'>
        <?php  echo isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'],'titulo'): ''//si esxiste la sesion imprime la funcion mostrarerrores ?>

        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" cols="30" rows="5"><?=$entrada_actual['descripcion']?></textarea>
        <?php  echo isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'],'descripcion'): ''//si esxiste la sesion imprime la funcion mostrarerrores ?>

        <label for="categoria">Categoria</label>
        <select name="categoria">
             <?php $categorias = conseguirCategorias($db);
                // var_dump($categoria);
                // die();
                if(!empty($categorias)):
                    while($categoria = mysqli_fetch_assoc($categorias)):
            ?>
                <option value="<?=$categoria['id']?>" <?=($categoria['id'] == $entrada_actual['categoria_id']) ? 'selected="selected"' : ''?>>
                    <?=$categoria['nombre']?>
                </option>
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




<?php require_once 'include/pie.php'; ?>