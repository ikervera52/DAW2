<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php if(isset($_COOKIE["idioma"])) :?>

    <p>Idioma: <?=$idiomaSeleccionado?></p>

    <?php else:?>

    <p>No hay ningun idioma seleccionado.</p>
    
    <?php endif; ?>

    <form action="ejercicio3.php" method="POST">
        <span>Elige un idioma </span>
        <select name="idioma" required>
            <option value="1">Euskera</option>
            <option value="2">Castellano</option>
        </select>
        <br>
        <br>
        <input type="submit" name="guardar">
    </form>
</body>
</html>