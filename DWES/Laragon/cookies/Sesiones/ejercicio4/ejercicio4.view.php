<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ejercicio4.php" method="POST">
        <p>Catalogo de productos</p>
        <table>
            <tr><th>Nombre</th><th>Descripción</th><th>Precio</th> <th>Cantidad</th></tr>
            <?php foreach($productos as $producto)?>
                <tr>
                    <?= $producto["nombre"] ?>
                    <?= $producto["descruocuib"] ?>
                    <?= $producto["nombre"] ?>
                </tr>
        </table>
    </form>
    
</body>
</html>