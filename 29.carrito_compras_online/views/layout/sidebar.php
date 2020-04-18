<aside id='lateral'>

        <div id='carrito' class='block_aside'>
            <h3>Mi carrito</h3>
            <ul>
                <?php $stats = Utils::statsCarrito();?>
                <!-- mostramos cantidad de producto que viene de la clase utils el contadors -->
                <li><a href="<?=base_url?>Carrito/index">Productos (<?=$stats['count']?>)</a></li>
                <li><a href="<?=base_url?>Carrito/index">Total <?=$stats['total']?> $ </a></li>
                <li><a href="<?=base_url?>Carrito/index">Ver el carrito</a></li>
            </ul>
        </div>    

        <div id='login' class='block_aside'>


            <?php if(!isset($_SESSION['identity'])): ?>

            <h3>Entrar a la Web</h3>
            <form action="<?=base_url?>Usuario/login" method = 'POST' >
                <label for="email">Email</label>
                <input type="email" name='email'>

                <label for="pass">Pass</label>
                <input type="password" name='pass'>
                <input type="submit" value='Enviar'>
            </form>


            <?php else: ?>
                <h3> 
                    <?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellido?>
                </h3>
            <?php endif; ?>

            <ul>
                
                <?php if(isset($_SESSION['admin'])):?>

                <li><a href="<?=base_url?>Categoria/index">Gestionar categorias</a></li>
                <li><a href="<?=base_url?>Producto/gestion">Productos</a></li>
                <li><a href="<?=base_url?>Pedido/gestion">Gestionar Pedidos</a></li>

                <?php endif;?>


                <?PHP if(isset($_SESSION['identity'])):?>
                
                <li><a href="<?=base_url?>Pedido/mis_pedidos">Mis pedidos</a></li>
                <li><a href="<?=base_url?>Usuario/logout">Cerrar Sesion</a></li>

                <?php else: ?>
                
                <li><a href="<?=base_url?>Usuario/registro">Registrate aqui</a></li>

                <?php endif; ?>


            </ul>

        </div>
    </aside>



    <!-- CONTENIDO CENTRAL -->
    <div id="central">