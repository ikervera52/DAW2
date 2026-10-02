<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <ul>
        <?php foreach($estudiantesNotas as $clave => $valor){?>
            <li> 
                La nota media de 
                <?= $clave ?>
                es
                <?= $valor ?>
            </li>
        <?php }?>
    </ul>

</body>
</html>