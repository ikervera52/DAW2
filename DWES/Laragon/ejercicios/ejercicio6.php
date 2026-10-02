<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<?php 

    $a = $_GET["a"];
    $b = $_GET["b"];

    function multiplicar ($num1 , $num2){
        return $num1 * $num2;
    }

    echo ("La multiplicación de A * B es: " . multiplicar($a,$b));

?>
    
</body>
</html>