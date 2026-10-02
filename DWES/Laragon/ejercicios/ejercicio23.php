<?php 

$estudiantes = [
    "Ane",
    "Mikel",
    "Nora",
    "Danel",
    "Amaia",
    "Izaro"
];

function crearListado($array){
    echo "<ul>";

    for($x = 0; $x < count($array); $x++){
        
        echo "<li id=\" " . ($x + 1) . "\"> " . $array[$x] ."</li>";
    }

    echo "</ul>";
}

crearListado($estudiantes);

?>