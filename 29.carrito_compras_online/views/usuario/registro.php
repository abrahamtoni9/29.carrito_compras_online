<h1>Registrarse</h1>

<?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete'):?>
        <strong class='alert_green'>Registro completado exitosamente</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'):?>
        <strong class='alert_red'>Registro Fallido, introduzca correctamente los datos</strong>
<?php endif;?>

<?php Utils::deleteSession('register');?>


<!-- <form action="index.php?controllers=Usuario&action=save" method='POST'> -->
<form action="<?=base_url?>Usuario/save" method='POST'>
        
    <label for="nombre">Nombre</label>
    <input type="text" name='nombre' >
        
    <label for="apellido">Apellido</label>
    <input type="text" name='apellido' >
    
    <label for="email">Email</label>
    <input type="email" name='email' >
    
    <label for="pass">Password</label>
    <input type="password" name='pass' >
    
    <input type="submit" value='Enviar'>

</form>