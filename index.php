<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title><?php echo "El título de la página"; ?></title>
        <link href="/css/estilos.css" rel="stylesheet" type="text/css">
    </head>
 
    <body>

<?php

$nombre = $_POST['nombre'];

echo $nombre;

$email = $_POST['email'];

echo $email;

?>

    </body>
</html>