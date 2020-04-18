<?php


//CAPTURAR EXCEPCIONES. EN CODIGO SUSCEPTIBLE A ERRORES
try {

    if (isset($_GET['id'])) {
        echo "<h1>El parametro es: {$_GET['id']}</h1>";
    }else{
        throw new Exception('Faltan parametros por la url');//captura el error
    }

    
}catch (Exception $th) {
    echo "Ha habido un error ".$th->getMessage()."<br>";//imprime el error
}finally //se ejecuta si o si despues de ejecutar el try catch
{
    echo "Todo correcto";
}



?>