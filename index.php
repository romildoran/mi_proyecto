<?php 
//variables
    $nombre="Ronald Duarte";
    $Nombre="otro nombre";

//constantes
    define('CURSO','PHP 8 desde cero');
        echo CURSO."<br>";
    define('USUARIO_1', 'Ronald');
        echo USUARIO_1."<br>";
    define ('ANIMALES',[
        'perro',
        'gato',
        'loro',
        'raton',
        'peces',
        'reptiles',
    ]);
        echo ANIMALES[0]."<br>";

//para saber si he definido constantes
    if(defined('CURSO1')){
        echo "Sí se ha definido"."<br>";
    }else{
        echo "No se ha definido"."<br>";
    }
// para saber con que version estoy trabajando (constantes globales)
    echo "Mi versiones de PHP es: ".PHP_VERSION;
    echo "<br>";
    echo "Mi versiopnes de sistema operativo es: ".PHP_OS;
    echo "<br>";
    echo PHP_EXTENSION_DIR;
    echo "<br>";
    echo PHP_SAPI;
    echo "<br>";
    echo __LINE__;
    echo "<br>";
    echo __FILE__;
    echo "<br>";
    
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="curso php" content="">
        <meta name="Ronald Duarte" content="">
        <title>Document</title>
    </head>

    <body>
        <h1><?php echo "Hola Mundo, mi nombre es ".$nombre;?></h1>
        <p></p>
    </body>
                        
