<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ejercicio5.php" method="POST">
        <thead> <h1>Catálogo de productos</h1></thead>
    
        <table>
        <tr> <th>Nombre</th> <th> Descripción</th> <th>Precio</th> <th>Cantidad</th></tr>
        <?php foreach($productos as $producto) :?>
            <tr>
                <td><?=$producto["nombre"] ?></td>
                <td><?=$producto["descripcion"] ?></td>
                <td><?=$producto["precio"] ?></td>
                <td><input type="number" name="cantidad[]" value="0" min="0" required></td>
            </tr>
        <?php endforeach; ?>

        <tr>
            <td><input type="submit" value="Comprar"></td>
        </tr>
        </table>

    </form>

</body>
</html>