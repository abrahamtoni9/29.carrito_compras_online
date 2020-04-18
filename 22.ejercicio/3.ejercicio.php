<?php

//Ejericio 3. 
/**
 * 1. Hacer una interfaz de usuario con dos input y 4 botones uno para sumar, restar, multiplicar y dividir y que nos muestre el resultado por pantalla
 * 
 */


 $resultado = false;
 if(isset($_POST['n1']) && isset($_POST['n2']))
 {
     if(isset($_POST['sumar']))
     {
         $resultado = "El resultado es ".(int)$_POST['n1'] + (int)$_POST['n2'];
     }
     if(isset($_POST['restar']))
     {
         $resultado = "El resultado es ".(int)$_POST['n1'] - (int)$_POST['n2'];
     }
     if(isset($_POST['multiplicar']))
     {
         $resultado = "El resultado es ".(int)$_POST['n1'] * (int)$_POST['n2'];
     }
     if(isset($_POST['dividir']))
     {
         $resultado = "El resultado es ".(int)$_POST['n1'] / (int)$_POST['n2'];
     }
 }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Calculadora en PHP</h1>
    <form action="3.ejercicio.php" method="POST">
        <label for="n1">Numero 1</label><br>
        <input type="number" name="n1" id=""><br><br>
        <label for="n2">Numero 2</label><br>
        <input type="number" name="n2" id=""><br><br>

        <input type="submit" value="Sumar" name="sumar"> 
        <input type="submit" value="Restar" name="restar"> 
        <input type="submit" value="Multiplicar" name="multiplicar"> 
        <input type="submit" value="Dividir" name="dividir"> 
    
    </form>

    <?php

        if($resultado != false)
        {
            echo "<h1>El resultado es : $resultado</h1>";
        }
    ?>
    
</body>
</html>