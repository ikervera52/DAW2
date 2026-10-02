<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Precio total:</h3>
    <h4><?= $precioTotal ?> €</h4>

    <h2>Detalle de la compra</h2>
    <ul>
        <?php for($x = 0; $x < count($productos); $x++) :
            
            if($cantidades[$x] > 0 ) : ?>

                <li>
                    <?= $productos[$x]["nombre"] ?> ( <?=$cantidades[$x] ?>)
                </li>
            
            <?php endif;
        endfor; ?>

    </ul>

    <br>

    <form action="ejercicio5.php" method="post">
        
        <input type="submit" value="Volver a la tienda">
 
    </form>
    
</body>
</html>