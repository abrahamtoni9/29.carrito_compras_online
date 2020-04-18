
<?php require_once 'include/redireccion.php'?>

<?php require_once 'include/cabecera.php'?>

<!-- BARRA LATERAL -->
<?php require_once 'include/lateral.php'?>


<!-- CAJA PRINCIPAL -->
<div id='principal'>
    <h1>Crear Categorias</h1>

    <p>Anade Nuevas Categorias al blog para que los usuarios puedan usarlas al  crear sus entradas</p>
    <br>
    <form action="guardar-categoria.php" method= 'POST'>

        <label for="nombre">Nombre</label>
        <input type="text" name = 'nombre'>


        <input type="submit" value= 'Guardar'>
    </form>

</div>    
<!-- PIE DE PAGINA -->
<?php require_once 'include/pie.php'; ?>
   