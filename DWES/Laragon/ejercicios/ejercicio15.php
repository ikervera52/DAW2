<?php 

$diccionario = [
    "jvadillo" => [
        "nombre" => 'Jon',
        'apellido' => 'Vadillo',
        'gmail' => 'jvadillo@egibide.org'
    ]
] ;

function getDatos($array, $nombre, $dato){
    return $array[$nombre][$dato];
}

echo "Dato que buscas: " . getDatos($diccionario, 'jvadillo', 'nombre');

?>