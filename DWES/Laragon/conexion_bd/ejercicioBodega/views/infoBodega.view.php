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
    <a href="index.php?accion=eliminarBodega&id=<?=$id ?>">Eliminar</a>

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
        <input type="radio" name="restaurante" value="1" <?=$bodegaSeleccionada->restaurante == 1 ? "checked" : ""?> > <span>Si</span>
        <br>
        <input type="radio" name="restaurante" value="0" <?=$bodegaSeleccionada->restaurante == 0 ? "checked" : ""?>><span>No</span>
        <br>

        <label for="">¿Dispone de hotel?</label>
        <br>
        <input type="radio" name="hotel" value="1" <?=$bodegaSeleccionada->hotel == 1 ? "checked" : ""?>> <span>Si</span>
        <br>
        <input type="radio" name="hotel" value="0" <?=$bodegaSeleccionada->hotel == 0 ? "checked" : ""?>> <span>No</span>
        <br>
        <br>

        <input type="hidden" name="accion" value="guardarBodega">
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="submit" value="Guardar">
    </form>

    <h4>Vinos disponibles</h4>

    <a href="index.php?accion=entrarAnadirVino$id=<?=$id ?>">Añadir vino</a>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Acciones</th>
        </tr>
        <?php foreach($vinos as $vino) : ?>
            <tr>
                <th><?=$vino->nombre?></th>
                <th><?=$vino->tipo?></th>
                <th>
                    <a href="index.php$accion=verVino&id= <?=$idVino?>">Ver</a>
                    <a href="index.php$accion=eliminarVino&id= <?=$idVino?>">Ver</a>
                </th>
            </tr>
        <?php endforeach; ?>
    </table>
    
</body>
</html>