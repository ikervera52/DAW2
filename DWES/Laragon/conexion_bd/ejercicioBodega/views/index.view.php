<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php require("layouts/header.php") ?>

    <main>
        <form action="index.php" method="GET">
            <input type="hidden" name="accion" value="anadirView">
            <input type="submit" value="Añadir Bodega"/>
        </form>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Localización</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
            <?php foreach($bodegas as $bodega) : ?>
                <tr>
                    <td><?=$bodega->nombre?></td>
                    <td><?=$bodega->direccion?></td>
                    <td><?=$bodega->telefono?></td>
                    <td><?=$bodega->email?></td>
                    <td>
                        <a href='index.php?accion=entrar&id= <?=$bodega->id?>'>Entrar</a>
                        <a href='index.php?accion=borrar&id= <?=$bodega->id?>'>Borrar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </main>
   
</body>
</html>