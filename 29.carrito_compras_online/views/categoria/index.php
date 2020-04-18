
<h1>Gestionar Categorias</h1>

<a href="<?=base_url?>Categoria/crear" class="button button-small">
    Crear Categoria
</a>

<table>
    <tr>
        <th>
            Codigo
        </th>
        <th>
            Nombre 
        </th>
    </tr>

<?php while($cat = $categorias->fetch_object()):?>
    <tr>
        <td>
            <?=$cat->id?>
        </td>
        <td>
            <?=$cat->nombre?>
        </td>
    </tr>
<?php endwhile;?>
</table>

