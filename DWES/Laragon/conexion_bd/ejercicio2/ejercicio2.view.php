<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p>Lista de compra</p>
    <?php if(isset($listaCompra)) : ?>
        <ul>
            <?php foreach($listaCompra as $producto) : ?>
            <li>
                <?=$producto["nombre"] ?> 
                (<a href="ejercicio2.php?delProducto=<?=$producto["id"] ?> ">Eliminar</a>)</li>
        <?php endforeach; ?>
        </ul>
     <?php else: ?>
    <p>No hay elementos en la lista.</p>
    <?php endif; ?>

    <p>Añadir elemento</p>
    <form action="ejercicio2.php" method="POST">
        <input type="text" name="producto" required>
        <input type="submit" value="Añadir">
    </form>

    <a href="http://localhost/conexion_bd/ejercicio2/ejercicio2.php?delProducto=-1">Vaciar lista</a>

    



    
</body>
</html>