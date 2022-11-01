<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="formularios.php" method="POST" enctype="multipart/form-data">
            <label>
                Nombre:
                <input type="text" name="name">
            </label>
            <br>
            <label>
                Edad:
                <input type="number" name="year">
            </label>
            <br>
            <p>Sexo:</p>
            <select name="sexo">
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select>
            <!-- <label>
                <input type="radio" name="sexo" value="masculino">
                Masculino
            </label>
            
            <label>
                <input type="radio" name="sexo" value="femenino">
                Femenino
            </label> -->
            <br>
            <p>Roles</p>
            <label>
                <input type="checkbox" name="roles[]" value="Administrador">
                Administrador
            </label>
            <label>
                <input type="checkbox" name="roles[]" value="Editor">
                Editor
            </label>
            <label>
                <input type="checkbox" name="roles[]" value="Moderador">
                Moderador
            </label>
            <br>
            <br>
            <label>
                Imagen
                <br>
                <input type="file" name="image">
            </label>
            <br>
            <br>
            <label>Mensaje</label>
            <br>
            <textarea name="Mensaje" id="" cols="30" rows="30"></textarea>
            <br>
            <button type="submit">Enviar</button>
        </form>    
    </body>
</html>