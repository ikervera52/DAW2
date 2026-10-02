<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr, th, td{
            padding: .5rem;
            text-align: left;
        }
        input{
            padding: .3rem .5rem;
        }
        header, footer{
            text-align: center;
        }
        footer{
            min-height: 100vh;
        }

    </style>
</head>
<body>

        <?php require("layout/ejercicio3.header.php"); ?>

    <table>
        <tr>
            <th>DNI</th>
            <td><?=$empleadoElegido->dni?></td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td><?=$empleadoElegido->nombre?></td>
        </tr>
        <tr>
            <th>Apellidos</th>
            <td><?=$empleadoElegido->apellidos?></td>
        </tr>
        <tr>
            <th>Edad</th>
            <td><?=$empleadoElegido->edad?></td>
        </tr>
        <tr>
            <th>Sexo</th>
            <td><?=$empleadoElegido->sexo?></td>
        </tr>
        <tr>
            <th>Fecha de nacimiento</th>
            <td><?=$empleadoElegido->fechaNacimiento?></td>
        </tr>
        <tr>
            <th>Curriculum</th>
            <td><?=$empleadoElegido->curriculum?></td>
        </tr>
        <tr>
            <td>
                <form action="ejercicio3.php" method="GET">
                    <input type="submit" value="Volver">
                </form>
            </td>
        </tr>
    </table>
    
    <?php require("layout/ejercicio3.footer.php"); ?>


    
</body>
</html>