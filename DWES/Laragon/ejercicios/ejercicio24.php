<?php 

$agendaContactos = [
    [
        "nombre" => "Amaia",
        "apellidos" => "Gorbea",
        "telefono" => "688667654",
        "email" => "amaia@gmail.com"
    ],
    [
        "nombre" => "Ane",
        "apellidos" => "Larrain",
        "telefono" => "688667654",
        "email" => "ane@gmail.com"
    ],
    [
        "nombre" => "Maite",
        "apellidos" => "Iriondo",
        "telefono" => "688667654",
        "email" => "maite@gmail.com"
    ],
    [
        "nombre" => "Maite",
        "apellidos" => "Iriondo",
        "telefono" => "688667654",
        "email" => "maite@gmail.com"
    ],
    [
        "nombre" => "Maite",
        "apellidos" => "Iriondo",
        "telefono" => "688667654",
        "email" => "maite@gmail.com"
    ],
    [
        "nombre" => "Maite",
        "apellidos" => "Iriondo",
        "telefono" => "688667654",
        "email" => "maite@gmail.com"
    ]
    ];

function crearTablaContactos($array){

    $datosComprobar = ["nombre","apellidos","telefono","email"];
    
    echo "<table>";
    echo "<tr><th> Nombre </th> <th> Apellido </th> <th> Telefono </th> <th> Email </th> </tr>";

    foreach($array as $objeto){

        echo "<tr>";

        foreach($datosComprobar as $dato){
            
            echo "<td>";
            echo $objeto[$dato];
            echo "</td>";
            
        }         

        echo "</tr>";
    }

    echo "</table>";
}

crearTablaContactos($agendaContactos);

?>