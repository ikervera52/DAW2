<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php require "layouts/header.php"; ?>

    <h4>Nueva bodega</h4>
    <a href="index.php">Volver</a>

    <form action="index.php" method="GET">
        <label for="">Nombre</label>
        <input type="text" name="nombre"  value="<?=$bodegaSeleccionada->nombre?>" required>
        <br>

        <label for="">Direccion</label>
        <input type="text" name="direccion" required>
        <br>

        <label for="">Email</label>
        <input type="email" name="email" required>
        <br>

        <label for="">Telefono</label>
        <input type="text" name="telefono" required>
        <br>

        <label for="">Persona de contacto</label>
        <input type="text" name="personaContacto" required>
        <br>

        <label for="">Año de fundacion</label>
        <input type="number" name="anoFundacion" required>
        <br>

        <label for="">Example textarea</label>
        <textarea name="textarea"></textarea>
        <br>

        <label for="">¿Dispone de restaurante?</label>
        <br>
        <input type="radio" name="restaurante" value="1"> <span>Si</span>
        <br>
        <input type="radio" name="restaurante" value="0"> <span>No</span>
        <br>

        <label for="">¿Dispone de hotel?</label>
        <br>
        <input type="radio" name="hotel" value="1" > <span>Si</span>
        <br>
        <input type="radio" name="hotel" value="0"> <span>No</span>
        <br>
        <br>

        <input type="hidden" name="accion" value="anadirBodega">
        <input type="submit" value="Añadir">
    </form>
    
</body>
</html>