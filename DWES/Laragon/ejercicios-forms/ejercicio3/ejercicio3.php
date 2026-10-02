<?php 

$enviado = false;

if(isset($_POST["asunto"])){

    $asunto = $_POST["asunto"];
    $email = $_POST["email"];
    $motivo = $_POST["motivo"];
    $mensaje = $_POST["mensaje"];

    $enviado = true;

    $motivo = imprimirMotivo($motivo);

}

function imprimirMotivo(int $motivo){
    switch(true){
        case $motivo = 1;
        return "Soporte técnico";
        break;
        case $motivo = 2;
        return "Información de pruebas";
        break;
        case $motivo = 3;
        return "Queja";
        case $motivo = 4;
        return "Otro";
        break;
    }
}




require "ejercicio3.view.php";
?>