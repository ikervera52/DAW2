<?php 

$usuarios = [
    "user1" => [
        "nombre" => "Nora",
        "password" => "1234",
        "email" => "nora@gmail.com"
    ]
    ];

$user = $_GET["user"];
$psw = $_GET["psw"];

function userExists ($usuarios, $user, $psw){
    if(array_key_exists($user, $usuarios)){
        
        echo "El usuario " . $user . " existe";
        echo "<br>";

        if($usuarios[$user]["password"] == $psw ){
            echo "La contraseña es correcta";
        } else{
            echo "La contraseña es incorrecta";
        }

    } else {
        echo "El usuario no existe";
    }
}

userExists($usuarios, $user, $psw);

?>