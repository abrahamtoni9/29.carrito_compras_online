<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
 </head>
 <body>
     <H1>Formulario PHP POR GET</H1>
     <form method = "GET" action = "recibir.php">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
        </p>
        <p>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido">
        </p>

        <input type="submit" value="Enviar">

     </form>
     <H1>Formulario PHP POR POST</H1>
     <form method = "POST" action = "recibir.php">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
        </p>
        <p>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido">
        </p>

        <input type="submit" value="Enviar">

     </form>
 </body>
 </html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 ?>
 

