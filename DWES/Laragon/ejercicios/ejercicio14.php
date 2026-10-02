<?php 

$palabras = [
    'casa' => 'house',
    'gato' => 'cat',
    'perro' => 'dog',
    'ordenador' => 'computer',
    'mesa' => 'table'
];

echo "<pre>";
print_r($palabras);
echo "</pre>";

foreach($palabras as $clave => $valor){
    echo 'La traducción de ' . $clave
     . ' en ingles es ' . $valor . '.';
     echo '<br>';
}

?>