<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: sans-serif;
        }
        section{
            display: flex;
            align-items: top;
            justify-content: center;
            gap: 4rem;
        }
        th, tr, td{
            padding: 1rem;
            text-align: left;
        }
        table{
            border-collapse: collapse;
        }
        tr{
            border-top: 1px solid black;
        }
        input{
            padding: .3rem .5rem;
        }
        input[type="submit"]{
            background-color: #2359c6ff;
            border: 0px;
            border-radius: 5px;
            color: white;
            padding: .4rem .6rem;
        }
        .formAnadir{
            display: flex;
            flex-direction: column;
        }
        header, footer{
            text-align: center;
        }
        footer{
            min-height: 100%;
        }
        a{
            color: white;
            text-decoration: none;
            background-color: #2359c6ff;
            padding: .2rem .5rem;
            border-radius: 5px;
        }
        a:visited{
            background-color: #313d55ff;
        }

        .opSecreta{
            background-color: #d9b23dff;
        }
        .opSecreta:visited{
            background-color: #d9b23dff;
        }
        .filtro{
            padding: 1rem 0;
        }

    </style>
</head>
<body>
    
    <?php require("layout/ejercicio3.header.php"); ?>

    <section>
        <div class="tablaInfo">
            <th>Listado de empleados</th>
            
            <form class="filtro" action="ejercicio3.php" method="GET">
                <input type="text" name="buscarPorNombre" placeholder="Introdcue el nombre exacto">
                <input type="submit" name="accion" value="Filtrar">
            </form>
            
            <table>
                <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Opciones</th>
                </tr>
                <?php foreach($empleados as $empleado) : ?>
                    <tr>
                        <td><?=$empleado->dni ?></td>
                        <td><?=$empleado->nombre ?></td>
                        <td><?=$empleado->apellidos ?></td>
                        <td> <a href="ejercicio3.php?accion=verdetalles&id=<?=$empleado->id?>">Ver detalles</a> <a href="ejercicio3.php?accion=eliminar&id=<?=$empleado->id?>">Eliminar</a></td>

                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td>*Opción secreta: <a class="opSecreta" href="ejercicio3.php?accion=eliminartodo">Vaciar lista</a></td>
                </tr>
            </table>
        </div>

        <form class="formAnadir" action="ejercicio3.php" method="GET">
            <p>Añadir nuevo empleado</p>
            <input type="text" name="nombre" placeholder="Nombre" required>
            <br>
            <input type="text" name="apellidos" placeholder="Apellidos" required>
            <br>
            <input type="number" name="edad" placeholder="Edad" required>
            <br>
            <input type="date" name="fechaNacimiento" required>
            <br>
            <input type="text" name="email" placeholder="Email" required>
            <br>
            <input type="text" name="dni" required placeholder="DNI" min="9" max="9">
            <br>
            <select name="sexo">
                <option value="hombre">Hombre</option>
                <option value="mujer">Mujer</option>
                <option value="otro">Otro</option>
            </select> 
            <br>
            <textarea name="curriculum" placeholder="Curriculum"></textarea>
            <br>
            <input type="hidden" name="accion" value="insertar">
            <input type="submit" value="Añadir">
        </form>
    </section>

    <?php require("layout/ejercicio3.footer.php"); ?>
    
</body>
</html>