<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ejercicio3.php" method="POST">
        <p>Asunto
        <input type="text" name="asunto" required>
        </p>

        <p>Email
        <input type="email" name="email" required>
        </p>

        <p>Motivo
        <select name="motivo" required>
            <option value="1">Soporte técnico</option>
            <option value="2">Inforamción de productos</option>
            <option value="3">Queja</option>
            <option value="4">Otro</option>
        </select> 
        </p>
        <p>Mensaje:
        <textarea name="mensaje" required></textarea>
        </p>
        <br>
        <input type="submit" name="enviar" value="Enviar">
    </form>


    <?php if($enviado){ ?>
        
        <p>PREGUNTA CONFIRMADA</p>

        <p>Asunto: <?= $asunto ?> </p>
        <p>Email: <?= $email ?> </p>
        <p>Motivo: <?= $motivo?> </p>
        <p>Mensaje: <?= $mensaje ?> </p>
        
    <?php }?>
    
</body>
</html>