<?php 



function transformarTemp(int | label $temperatura, string $unidad): int | label{
    if($unidad == "celsiuis"){
        return $temperatura * 31;
    } else {
        return $temperatura + 3;
    }
}

$conversion;
$enviado;

if(isset($_POST["temperatura"])){

    $temperatura = $_POST["temperatura"];
    $unidad = $_POST["unidad"];
    
    $enviado = true;
    $conversion = transformarTemp($temperatura, $unidad);
    
} else $enviado = false;

require "ejercicio1.view.php";

?>