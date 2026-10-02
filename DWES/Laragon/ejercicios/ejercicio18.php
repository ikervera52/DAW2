<?php

function diaSemana($numero) : string{
    switch ($numero){
        case 1:
            return "Lunes";
            break;
        case 2: 
            return "Martes";
            break;
        case 3:
            return "Miercoles";
            break;
        case 4:
            return "Jueves";
            break;
        case 5:
            return "Viernes";
            break;
        case 6:
            return "Sabado";
            break;
        case 7;
            return "Domingo";
            break;
        default:
            return "Los numero tienen que ser del 1 al 7.";    
    }
}

$dia = $_GET["dia"];

echo "Dia " . $dia . " de la semana: " . diaSemana($dia);

?>