<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php if(isset($mensaje_error)) : ?>
        <p stlye="color:red"> <?=$mensaje_error ?></p>
    <?php endif; ?>

    <form action="ejercicio3.php" method="POST">
        <table>
            <tr>
                <td>Usuario</td>
                <td><input type="text" name="usuario" required></td>
            </tr>
            <tr>
                <td>Contraseña</td>
                <td><input type="password" name="contrasena" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="iniciarSesion" value="Inicar Sesion"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>