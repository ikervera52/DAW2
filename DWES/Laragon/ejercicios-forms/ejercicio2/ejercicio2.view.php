<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ejercicio2.php" method="POST">

        <p>Calculadora</p>
        <?php  if($enviado):?>
            <p>Ultimo resultado:
                <?=$resultado?>
            </p>
        <?php endif; ?>


        <p>Primer numero: </p> 
        <input type="number" name="numero1">
        <br>
        <p>Segundo numero: </p>
        <input type="number" name="numero2">
        <br>
        <p>Seleccione la operacion deseada: </p>
        <select name="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>