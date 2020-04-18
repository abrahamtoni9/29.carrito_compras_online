<h1>Gestion de productos</h1>

<a href="<?=base_url?>Producto/crear" class="button button-small">
    Crear Producto
</a>

<!-- MENSAJES EMITIDAS AL AGREGAR -->
<?php //var_dump($_SESSION['producto'])?>
<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'):?>
    <strong class='alert_green'>El producto se ha creado correctamente</strong>
<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] == 'failed'):?>
    <strong class='alert_red'>El producto no se ha creado</strong>
<?php endif;?>


<!-- MENSAJES EMITIDAS AL BORRAR -->
<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'):?>
    <strong class='alert_green'>El producto se ha borrado correctamente</strong>
<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] == 'failed'):?>
    <strong class='alert_red'>El producto no se ha borrado</strong>
<?php endif;?>

<?php Utils::deleteSession('delete');?>

<table>
    <tr>
        <th>
            Codigo
        </th>
        <th>
            Nombre 
        </th>
        <th>
            Precio 
        </th>
        <th>
            Stock 
        </th>
        <th>
            Acciones 
        </th>
    </tr>

<?php while($prod = $productos->fetch_object()):?>
    <tr>
        <td>
            <?=$prod->id?>
        </td>
        <td>
            <?=$prod->nombre?>
        </td>
        <td>
            <?=$prod->precio?>
        </td>
        <td>
            <?=$prod->stock?>
        </td>
        <td>
            <a href="<?=base_url?>/Producto/editar&id=<?=$prod->id?>" class='button button-accion'>Editar</a>
            <a href="<?=base_url?>/Producto/eliminar&id=<?=$prod->id?>" class='button button-accion button-red'>Eliminar</a>
        </td>
    </tr>
<?php endwhile;?>
</table>
