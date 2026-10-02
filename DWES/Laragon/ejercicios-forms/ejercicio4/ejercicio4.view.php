<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ejercicio4.php" method="POST">
        <p>Login de usuario:</p>
        <p>Usuario: <input type="text" name="usuario" required></p>
        <p>Contraseña: <input type="password" name="contraseña" required></p>
        <br>
        <input type="submit" value="Enviar">
    </form>

    <?php if($enviado) {
            switch($usuarioComrpobado){
                case 0:
                    ?> <p>Bienvenido, <?= $usuarios[$usuario]["nombre"] . " ". $usuarios[$usuario]["apellidos"]?></p>
                <?php
                break;
                case 1:?> <p>La contraseña no coincide</p>
                <?php
                break;
                case 2: ?> <p>El usuario no existe</p>
                <?php
            }
        } ?>
    
</body>
</html>