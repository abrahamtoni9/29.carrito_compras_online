<?php

    require_once '../vendor/autoload.php';

    //foto original
    $foto_original = 'mifoto.jpg';

    //variable para guardar la foto con un nuevo nombre
    $guardar_en = 'fotomodificada.png';

    //creamos el objeto THUMB y le pasamos un parametro de JPG para modificar
    $thumb = new PHPThumb\GD($foto_original);


    //redimenzionar
    $thumb->resize(250,250);

    //recortar
    $thumb->crop(50,50,120,120);


    //recorta apartir del centro
    //$thumb->cropFromCenter(100);
    //recorta ancho y alto
    //$thumb->cropFromCenter(100,100);



    //muestra la imagen
    $thumb->show();

    $thumb->save($guardar_en);


