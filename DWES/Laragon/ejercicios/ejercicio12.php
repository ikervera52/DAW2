<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<?php 

    $ciudades = ['Paris', 'Berlin', 'Amsterdam', 'Praga'];

    function getValor ($array ,$posicion){
        return $array[$posicion];
    }

    echo ("Posicion 2 del array: " . getValor($ciudades,1));
    echo("<br>");

    function setValor ($array, $posicion, $valor){
        $array[$posicion] = $valor;
        return $array;
    }


    print_r($ciudades);
    echo("<br>");

    $ciudades = setValor($ciudades, 0, 'Madrid');

    print_r($ciudades);


?>
    
</body>
</html>