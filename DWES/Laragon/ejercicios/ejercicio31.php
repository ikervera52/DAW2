<?php

    $numerosAleatorios;
    $numeroMenor;
    $numeroMayor;

    function generarNumRandom(){

        $array = [];

        for ($x = 0; $x <= 20; $x++){
            array_push($array ,random_int(1, 999));
        }

        return $array;
    }

    function imprimirArray($array){
        $text = "";

        foreach($array as $dato){
            $text .= $dato . " ";
        }

        return $text;
    }

    function comprobarNumeroMayor($array){
        
        $numeroMayor = $array[0];

        foreach($array as $numero){

            if($numero > $numeroMayor){
                $numeroMayor = $numero;
            }
        }

        return $numeroMayor;
    }

    function comprobarNumeroMenor($array){

        $numeroMenor = $array[0];
        foreach($array as $numero){
            if( $numero < $numeroMenor)
                $numeroMenor = $numero;
        }

        return $numeroMenor;
    }

    $numerosAleatorios = generarNumRandom();

    require "ejercicio31.view.php";

?>