<?php

    include  "include/cabecera.php";

?>

    <!-- contenido -->
    <div>
        <h2>
            Es una pagina de inicio
        </h2>

        <p>
            Texto de prueba de la pagina de inicio
        </p>
    </div>

    <?php
        var_dump($nombre);
        echo "<h1>hola $nombre</h1>";
    ?>

    <!--pie de pagina-->
<?php
    include "include/footer.php";
?>
