

<aside id='sidebar'>


    <div id= 'buscador' class ='bloque'>

    <h3>Buscar</h3>

    <form action="buscar.php" method= 'POST'>
    
        <input type="text" name='busqueda'/>
        
        <input type="submit" value = 'Buscar'/>
    </form>
    </div>


    <?php if (isset($_SESSION['usuario'])) :?>
        <div id='usuario-logueado' class = 'bloque'>
            <h3>Bienvenido <?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellido'];?></h3>
            <?php //var_dump($_SESSION['usuario'])?>
            
            <!-- BOTONES -->
            <a href="cerrar.php" class= 'boton boton-rojo'>Cerrar Sesion</a>
            <a href="mis-datos.php" class= 'boton boton-naranja '>Mis datos</a>
            <a href="crear-entradas.php" class= 'boton boton-verde'>Crear Entradas</a>
            <a href="crear-categoria.php" class= 'boton'>Crear Categoria</a>

        </div>
    <?php endif;?>


    <?php if (!isset($_SESSION['usuario'])) : //si no existe la session de usuario, muestra los paneles de acceso?>

    <div id= 'login' class ='bloque'>

        <h3>Identificate</h3>

            <?php if (isset($_SESSION['error_login'])) :?>
                <div class='alerta alerta-error'>
                    <?=$_SESSION['error_login'];?>
                </div>
            <?php endif;?>

        <form action="login.php" method= 'POST'>

            <label for="email">Email</label>
            <input type="email" name='email'/>

            <label for="pass">Password</label>
            <input type="password" name='pass'/>
            
            <input type="submit" value = 'Entrar'/>
        </form>
    </div>


    <?php // if (isset($_SESSION['errores'])) : // si hay erorres imprimie todas las validaaciones de los campos?>
        <?//php var_dump($_SESSION['errores']); ?>
    <?php  // endif;?>
    <div id= 'register' class ='bloque'>
        <h3>Registrate</h3>


            <!-- Mostrar errores al no insertar en la base de datos-->
        <?php if(isset($_SESSION['completado'])):?>
            <div class= 'alerta alerta-exito'>
                <?= $_SESSION['completado'];?>
            </div>
        <?php elseif(isset($_SESSION['errores']['general'])):?>
            <div class= 'alerta alerta-error'>
                <?= $_SESSION['errores']['general'];?>
            </div>
        <?php endif;?>
        <form action="registro.php" method= 'POST' >
            
            <label for="nombre">Nombre</label>
            <input type="text" name='nombre'/>
            <?php  echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'],'nombre'): ''//si esxiste la sesion imprime la funcion mostrarerrores ?>
            
            <label for="apellido">Apellido</label>
            <input type="text" name='apellido'/>
            <?php  echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'],'apellido'): ''//si esxiste la sesion imprime la funcion mostrarerrores ?>
            
            <label for="email">Email</label>
            <input type="email" name='email'/>
            <?php  echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'],'email'): ''//si esxiste la sesion imprime la funcion mostrarerrores ?>

            <label for="pass">Password</label>
            <input type="password" name='pass'/>
            <?php  echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'],'pass'): ''//si esxiste la sesion imprime la funcion mostrarerrores ?>
            
            <input type="submit" name = 'submit' value = 'Registrar'/>
        </form>
        <?php borrarErrores(); ?>
    </div>

    <?php endif;?>

</aside>