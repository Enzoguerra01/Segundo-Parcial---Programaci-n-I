<?php 
    require "../utils/autoload.php";
     if(!isset($_SESSION['autenticado']))
        header("Location: /login");
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
    <h3>Creacion de Publicación</h3>
    
    <form action="/crear_publicacion" method="post">
        Publicación <br /> <textarea name="cuerpo" cols="30" rows="10"></textarea> <br />
        <input type="submit" value="Crear Publicación">
    </form>

    <a href="/">Volver</a>

</body>
</html>