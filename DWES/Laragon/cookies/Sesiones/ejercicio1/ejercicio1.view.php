<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h4>Lista de personas</h4>
    <ul>
        <?php foreach($asistentes as $asistente) : ?>
            <li><?=$asistente ?></li>
        <?php endforeach; ?>    

    </ul>

    <form action="ejercicio1.php" method="POST">
        <p>Añadir asistente</p>
        <input type="text" name="asistente" required>
        <input type="submit" value="Añadir" name="anadir">
        <input type="submit" value="Vaciar lista" name="vaciar">
    </form>
    
    
</body>
</html>