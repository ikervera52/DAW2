<?php

$numero = $_GET["number"];

function sumaTotal($numero){

    $sumaTotal = 0;

    for ($x = 1; $x <= $numero; $x++){
        $sumaTotal += $x;
    }

    return $sumaTotal;
}

echo "La suma de todos los numeros hasta " . $numero . " = " . sumaTotal($numero);

?>