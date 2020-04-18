
<!-- CONDICION PARA MOSTRAR MENSAJE SI NO ESTAS IDENTIFICADO  -->

<?php if(isset($_SESSION['identity'])): ?>

    <h1>Hacer pedido</h1>

    <a href="<?=base_url?>Carrito/index">Ver los productos y el precio del pedido</a>

    <h3>Direccion para el envio</h3>
    <form action="<?=base_url?>Pedido/add" method="POST">
        <label for="provincia">Provincia</label>
        <input type="text" name='provincia' require>
        
        <label for="localidad">Localidad</label>
        <input type="text" name='localidad' require>

        <label for="direccion">Direccion</label>
        <input type="text" name='direccion' require>

        <input type="submit" value='Confirmar Pedido'>
    </form>


<?php else: ?>
    <h1>Necesita estar identificado</h1>
    <p>Necesitas estar logueado en la web para poder realizar tu pedido</p>
<?php endif; ?>