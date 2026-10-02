<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php if($enviado):?>
        <p> Resultado de la conversion (
            <?=$temperatura . " ".  $unidad ?>
        )
            <?= $conversion ?>
        <?php endif; ?>

    <form action="ejercicio1.php" method="POST">

        <label> Introduce la temperatura:</label>
        <input type="number" name="temperatura" required/>

        <p></p>
        
        <label> Indica la unidad de temperatura introducida:</label>
        <select name="unidad" required>
            <option value="celsius">Celsius</option>
            <option value="farenheit">Farenheit</option>
        </select>

        <p></p>

        <input type="submit" value="Enviar" />
        
    </form>
    
</body>
</html>