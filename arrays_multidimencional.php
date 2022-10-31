<?php

$data=[
    [
    'nombre'=>'vixctor arana flores',
    'email'=>'victorarana@gmail.com',
    'celular'=>'9876543210',
    'direccion'=>[
        'pais'=>'Peru',
        'ciudad'=>'Lima',
        ]
    ],
    [
    'nombre'=>'paola arana',
    'email'=>'paola@gmail.com',
    'celular'=>'9876543210',
    'direccion'=>[
        'pais'=>'Perú',
        'ciudad'=>'Lima',
        ]
    ],
    [
    'nombre'=>'joel arana',
    'email'=>'joel@gmail.com',
    'celular'=>'9876543210',
    'direccion'=>[
    'pais'=>'Perú',
    'ciudad'=>'Lima',
        ]
    ],
];

foreach( $data as $item ) {
    echo $item['nombre']."<br>";
    echo $item['email']."<br>";
    echo $item['celular']."<br>";

    echo "<hr>";
}