

<h1>Listado de Usuarios</h1>
<?php //var_dump($todos_los_usuarios->fetch_object());
 while($usuarios = $todos_los_usuarios->fetch_object()): ?>
    <?=$usuarios->nombre?> - <?=$usuarios->apellido?><br>
<?php endwhile; ?>