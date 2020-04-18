
<?php require_once 'include/redireccion.php'?>

<?php require_once 'include/cabecera.php'?>

<!-- BARRA LATERAL -->
<?php require_once 'include/lateral.php'?>


<!-- CAJA PRINCIPAL -->
<div id='principal'>
    <h1>Mis Datos</h1>

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
        <form action="actualizar-usuario.php" method= 'POST' >
            
            <label for="nombre">Nombre</label>
            <input type="text" name='nombre' value = '<?= $_SESSION['usuario']['nombre'];?>'/>
            <?php  echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'],'nombre'): ''//si esxiste la sesion imprime la funcion mostrarerrores ?>
            
            <label for="apellido">Apellido</label>
            <input type="text" name='apellido' value = '<?= $_SESSION['usuario']['apellido'];?>'/>
            <?php  echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'],'apellido'): ''//si esxiste la sesion imprime la funcion mostrarerrores ?>
            
            <label for="email">Email</label>
            <input type="email" name='email' value = '<?= $_SESSION['usuario']['email'];?>'/>
            <?php  echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'],'email'): ''//si esxiste la sesion imprime la funcion mostrarerrores ?>
            
            <input type="submit" name = 'submit' value = 'Actualizar'/>
        </form>
        <?php borrarErrores(); ?>

</div>    
<!-- PIE DE PAGINA -->
<?php require_once 'include/pie.php'; ?>