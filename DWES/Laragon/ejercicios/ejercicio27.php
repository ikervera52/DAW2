<?php 

    $gruposMusica = [
        "ACDC",
        "Metalica",
        "Los Chunguitos",
        "Nirvana",
        "Radeo Head"
    ];

    function listarGrupos($array){

        foreach($array as $elemento){
            echo "<li>" . $elemento . "</li>";
        }
    }

    require "ejercicio27.view.php";

?>