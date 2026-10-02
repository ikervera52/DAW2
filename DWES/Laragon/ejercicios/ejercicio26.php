<?php 

$marcas = [
    "Audi",
    "Seat",
    "Mercedes",
    "BMW",
    "Fiat"
];

function listarMarcas($array){
    
    $contador = 0;

    do{

        echo "<li>" . $array[$contador] . "</li>";

        $contador++;

    }while($contador < count($array));
}

require "ejercicio26.view.php";

?>