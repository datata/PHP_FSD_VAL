<?php

    $vehiculo = [
        'marca' => "Ford",
        'modelo' => "Focus",
        'numero_ruedas' => 4,
        'electrico' => false
    ];

    // echo $vehiculo['hola'];

    if(array_key_exists('marca',$vehiculo)) {
        echo 'existe';
    }

    echo 'continue';


    // var_dump(array_key_exists('marca',$vehiculo));
    // var_dump(array_key_exists('rueda_repuesto',$vehiculo));

?>