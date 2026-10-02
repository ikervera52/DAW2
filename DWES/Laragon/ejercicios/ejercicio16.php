<?php 

$a = $_GET['a'];
$b = $_GET['b'];

if ($a != $b){
    echo "La suma es:" . $a + $b;

} else {
    echo "La multiplicacion es: " . $a * $b;
}

?>