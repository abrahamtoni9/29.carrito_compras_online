
<h1>Listado de Notas</h1>
<?php //var_dump($notas->fetch_object());
 while($nota = $notas->fetch_object()): ?>
    <?=$nota->titulo?> - <?=$nota->fecha?><br>
<?php endwhile; ?>