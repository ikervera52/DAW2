<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php if(isset($_COOKIE["usuario"])) : ?>

        <p>Ultima cookie: <?=$_COOKIE["usuario"]?> </p>
    <?php else : ?>
        <p>No hay ningún usuario almacenado</p>
    <?php endif; ?>

    <form action="ejercicio1.php" method="POST">
        <p>Introduce el texto que deseas almacenar: </p>
        <input type="text" name="texto">
        <input type="submit" value="Guardar">

        <p>Eliminar la cookie</p>
        <input type="submit" name="eliminarCookie" value="Eliminar">
    </form>
    
</body>
</html>