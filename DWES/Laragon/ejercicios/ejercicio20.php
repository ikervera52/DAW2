<?php

$numero = $_GET["number"];

function sumaTotal($numero){

    $sumaTotal = 0;

    for ($x = 1; $x <= $numero; $x++){
        if($x % 2 != 0) continue;
            $sumaTotal += $x;
    }

    return $sumaTotal;
}

echo "La suma de todos los numeros pares hasta " . $numero . " = " . sumaTotal($numero);

?>