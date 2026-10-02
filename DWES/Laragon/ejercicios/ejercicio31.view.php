<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <ul>
        <li> El array generado es: 
            <?= imprimirArray($numerosAleatorios)?>
        </li>
        <li> El valor más bajo del array es 
            <?= $numeroMenor = comprobarNumeroMenor($numerosAleatorios) ?>
        </li>
        <li> El alor más alto del array es
            <?= $numeroMayor = comprobarNumeroMayor($numerosAleatorios) ?>
        </li>
    </ul>

</body>
</html>