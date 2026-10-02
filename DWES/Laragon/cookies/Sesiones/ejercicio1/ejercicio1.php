<?php 

session_start();

$asistentes = [];

    if(isset($_POST["anadir"])){
        $asistente = $_POST["asistente"];

        $asistentes = $_SESSION["asistentes"];

        array_push($asistentes, $asistente);

        $_SESSION["asistentes"] = $asistentes;
    }

    if(isset($_POST["vaciar"])){
        session_unset();
    }

    require "ejercicio1.view.php";

?>