<?php 

$enviado = false;

$precioTotal = 0;

$productos = [
    [
        "nombre" => "Logitech K120",
        "descripcion" => "Teclado USB básico y resistente",
        "precio" => "12.99"
    ],
    [
        "nombre" => "Logitech MX Master 3S",
        "descripcion" => "Ratón inalámbrico ergonómico para productividad",
        "precio" => "99.99"
    ],
    [
        "nombre" => "LG UltraGear 24GQ50F",
        "descripcion" => "Monitor Gaming 24 pulgadas FHD 165Hz",
        "precio" => "149.00"
    ],
    [
        "nombre" => "Sony WH-1000XM5",
        "descripcion" => "Auriculares inalámbricos con cancelación de ruido",
        "precio" => "329.50"
    ]
];

if(isset($_POST["cantidad"])){

    $cantidades = $_POST["cantidad"];
    $enviado = true;

    $precioTotal = calcPrecioTotal($productos, $cantidades);

    require "ejercicio5.respuestaview.php";

    
} else{
    require "ejercicio5.view.php";

}

function calcPrecioTotal($productos, $cantidades){

    $precioTotal = 0;

    for($x = 0; $x < count($productos); $x++){
        $precioTotal += $productos[$x]["precio"] * $cantidades[$x];
    }

    return $precioTotal;


}



?>