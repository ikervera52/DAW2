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

    $x = 1;
    while($x < count($array)){
        echo "<li id=\" " . ($x + 1) . "\"> " . $array[$x] ."</li>";
        $x++;
    }

    echo "</ul>";

}

crearListado($estudiantes);

?>