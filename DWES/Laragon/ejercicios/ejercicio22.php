<?php

$paises = [
    "Brasil",
    "Portugal",
    "Islandia",
    "Mexico",
    "Filipinas",
    "España"
];


$pais = $_GET["pais"];

function comprobarContenido($array, $dato){
    for($x = 0; $x < count($array); $x++){
        if($array[$x] == $dato)
            return $x;
    }
        
    return -1;
};

echo "La posicion de " . $pais . " es " . comprobarContenido($paises, $pais) . ".";


?>