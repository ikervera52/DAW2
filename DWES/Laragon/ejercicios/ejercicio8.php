<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<?php 

    $a = $_GET["a"];
    $b = $_GET["b"];

    function esMayor($num1, $num2) : int
    {
        return $num1 > $num2;
    }


    echo ("<p>El primer numero es mayor que el segundo: ");
    echo (var_export(esMayor($a,$b)));
    echo ("</p>");

?>
    
</body>
</html>