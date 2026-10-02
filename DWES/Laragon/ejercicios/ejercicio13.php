<?php 

$animales = ['Perro', 'Gato', 'Pez', 'Tortuga'];
$colores = ['Blanco', 'Negro', 'Azul', 'Rojo'];

echo 'Cantidad animales: '. count($animales);
echo "<br>";
echo 'Cantidad colores: '. count($colores);
echo "<br>";

// Funcion para añadir elementos con array_push
function anadirElemento($array, $animal){
    array_push($array, $animal);
    return $array;
}

$animales = anadirElemento($animales, 'Pajaro');
print_r($animales);

$colores = anadirElemento($colores, 'Gris');

echo "<br>";
print_r($colores);

// Unir dos array a traves de array_merge
$todos = array_merge($animales, $colores);

echo "<br>";
print_r($todos);

?>