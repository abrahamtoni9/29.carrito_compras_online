<?php

$contactos = array(
    array(//indice 0
        'nombre'=>'Antonio',//sub indice nombre
        'email'=>'antonio@hotmail.com'//sub indice email
        
    ),
    array(//indice 1
        'nombre'=>'Jorge',
        'email'=>'jorge@hotmail.com'
        
    ),
    array(//indice 2
        'nombre'=>'Alberto',
        'email'=>'alberto@hotmail.com'
        
    ),
    'direccion' => array(//indice direccion
        'nombre'=>'Roberto',
        'email'=>'roberto@hotmail.com'
        
    ),
    'telefono' => array(//indice direccion
        'nombre'=>'Luis',
        'email'=>'luis@hotmail.com',
        'casa' => array(
            'telefono 1' => '021-232-233',
            'telefono 2' => '021-234-563'
        )
        
        )
        
        
        
    );
    echo $contactos['direccion']['nombre'];
    echo "<br>";
    echo $contactos[1]['email'];
    echo "<br>";
    echo $contactos['telefono']['casa']['telefono 1'];
    echo "<br>";
    //var_dump($contactos);
    echo "<br>";

    //recorre todos los sub indice de email
    foreach ($contactos as $key => $value) {
        var_dump ($value['email']);
        echo "<br>";
        //var_dump ($value[0]);
    };
?>