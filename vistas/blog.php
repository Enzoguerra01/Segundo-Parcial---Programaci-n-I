<?php
require "../utils/autoload.php";

$publicaciones = PublicacionControlador::ObtenerTodos();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($_SESSION['autenticado'])) : ?>
        Bienvenido <?php echo $_SESSION['nombreUsuario'] ?>!
        <a href="/crear_publicacion">Crear Publicación</a>
        <a href="/cerrar_sesion">Salir</a>
    <?php else : ?>
        <a href="/login">Login</a>
    <?php endif; ?>
    <h2>Publicaciones</h2>
    <?php
    foreach ($publicaciones as $publicacion) :
    ?>
        <div>
            <div>
                <?php echo $publicacion['cuerpo'] ?>
            </div>
            <cite>Autor: <?php echo $publicacion['autor'] ?> / Fecha: <?php echo $publicacion['fecha_hora'] ?></cite>
            <hr>
        </div>
    <?php endforeach; ?>
</body>

</html>