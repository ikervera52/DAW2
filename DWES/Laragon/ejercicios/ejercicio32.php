<?php 

    $notasEstudiantes = [
        "Luis" => [
            "nota1" => 1,
            "nota2" => 8,
        ],
        "Iker" => [
            "nota1" => 5,
            "nota2" => 9
        ],
        "Jose" => [
            "nota1" => 3,
            "nota2" => 6
        ]
    ];

    $nota = 0;
    $aprobado = 5;

    function calcularMedia($notasArray){

        $suma = 0;

        foreach($notasArray as $nota){
            $suma += $nota;
        }

        return $suma / count($notasArray);

    }

    function comprobarAprobado($nota, $aprobado = 5){
        if($nota >= $aprobado){
            return true;
        }
        return false;
    }

    require "ejercicio32.view.php";

?>