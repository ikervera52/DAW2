<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php require "layouts/header.php"?>

    <h4>Datos bodega</h4>

    <a href="index.php?accion=editar$id=<?=$id ?>">Editar</a>
    <a href="index.php">Volver</a>
    <a href="index.php?accion=eliminar&id=<?=$id ?>"></a>

    <br>
    <br>

    <form action="index.php" method="GET">
        <label for="">Nombre</label>
        <input type="text" name="nombre" required value="<?=$bodegaSeleccionada->nombre?>">
        <br>

        <label for="">Direccion</label>
        <input type="text" name="direccion" required value="<?=$bodegaSeleccionada->direccion?>">
        <br>

        <label for="">Email</label>
        <input type="email" name="email" required value="<?=$bodegaSeleccionada->email?>">
        <br>

        <label for="">Telefono</label>
        <input type="text" name="telefono" required value="<?=$bodegaSeleccionada->telefono?>">
        <br>

        <label for="">Persona de contacto</label>
        <input type="text" name="personaContacto" required value="<?=$bodegaSeleccionada->personaContacto?>">
        <br>

        <label for="">Año de fundacion</label>
        <input type="number" name="anoFundacion" required value="<?=$bodegaSeleccionada->anoFundacion?>">
        <br>

        <label for="">¿Dispone de restaurante?</label>
        <br>
        <input type="radio" name="restaurante" value="1" <?=$restaurante | ""?> > <span>Si</span>
        <br>
        <input type="radio" name="restaurante" value="0" <?=$restaurante | ""?>><span>No</span>
        <br>

        <label for="">¿Dispone de hotel?</label>
        <br>
        <input type="radio" name="hotel" value="1" > <span>Si</span>
        <br>
        <input type="radio" name="hotel" value="0"> <span>No</span>
        <br>
        <br>

        <input type="hidden" name="accion" value="guardarBodega">
        <input type="submit" value="Guardar">
    </form>
    
</body>
</html>