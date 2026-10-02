<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<?php 
    $a = $_GET["a"];
    $b = $_GET["b"];

    $resta = $a - $b;
    echo ("<p>Resta de a - b: {$resta}</p>");

    $division = $a / $b;
    echo ("<p>Division de a / b: {$division}</p>");

    $aMayorAb = $a > $b;
    echo ("<p> A es mayor que B:");
    echo (var_export($aMayorAb));
    echo ("</p>");

    $aMenorOigualAb = $a <= $b;
    echo ("<p>A es menor o igual a B: ");
    echo( var_export($aMenorOigualAb));
    echo("</p>");

?>
    
</body>
</html>