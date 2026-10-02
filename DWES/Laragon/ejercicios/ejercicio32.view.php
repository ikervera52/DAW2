<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Se puede llevar a un CSS externo -->
    <style>
        .suspenso{
        color: red;
        border: 1px solid red;
        }

        table, tr, th, td{
        border: 1px solid black;
        }
    </style>

</head>
<body>
    
    <table>

        <tr>
            <th> Nombre </th>
            <th> Nota 1 </th>
            <th> Nota 2 </th>
            <th> Nota Media </th>
        </tr>

        <?php foreach ($notasEstudiantes as $estudiante => $notas){ ?>
            <tr>
                <td> <?= $estudiante ?>

                <?php $nota = $notas["nota1"];

                      if (!comprobarAprobado($nota)){ ?>
                      <td class="suspenso"> <?= $nota ?> </td>
                <?php } 
                    else{

                    ?> <td> <?=$nota ?> </td>

                <?php } ?>

                <?php $nota = $notas["nota2"];

                      if (!comprobarAprobado($nota)){ ?>
                      <td class="suspenso"> <?= $nota ?> </td>
                <?php } 
                    else{

                    ?> <td> <?=$nota ?> </td>

                <?php } ?>

                <?php $nota = calcularMedia($notas);

                      if (!comprobarAprobado($nota)){ ?>
                      <td class="suspenso"> <?= $nota ?> </td>
                <?php } 
                    else{

                    ?> <td> <?=$nota ?> </td>

                <?php } ?>
            
            </tr>

            <?php } ?>

    </table>

</body>
</html>