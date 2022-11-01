<?php
    $nombre = $_REQUEST['name'];
    $year = $_REQUEST['year'];
    $sexo = $_REQUEST['sexo'];
    $roles = $_REQUEST['roles'];
    $Mensaje = $_REQUEST['Mensaje'];

    $image = $_FILES['image'];
    $patch=$_SERVER['DOCUMENT_ROOT'].'/mi_proyecto/imagenes'.'/'.$image['name'];

    echo "<p>El nombre del usuario es: $nombre </p>";
    echo "<p>La edad del usuario es: $year </p>";
    echo "<p>El sexo del usuario es: $sexo </p>";
    echo "<p>Roles: </p>";

    echo "<ul>";
        foreach ($roles as $rol){
            echo "<li>$rol</li>";
        }
    echo "</ul>";
    // echo $patch;
    // var_dump($image);
    move_uploaded_file($image['tmp_name'],$patch);

    echo "<p>Mensaje enviado: </p>";
    echo "<p>$Mensaje</p>";

?>