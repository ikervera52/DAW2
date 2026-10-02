<?php 

session_start();

$mensaje_error;


$mensajesDeError = [
    2 => "Usuario no valido",
    1 => "Contraseña no valida"
];

$usuarios = [
    "user1" =>[
        "nombre" => "Iker",
        "apellidos" => "Vera Magro",
        "contrasena" => "12345"
    ],
    "user2" =>[
        "nombre" => "Jose",
        "apellidos" => "Miguel",
        "contrasena" => "12345"
    ]
];

if(isset($_POST["iniciarSesion"])){

    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    $respuesta = usuarioExiste($usuario, $contrasena, $usuarios);

    if($respuesta == 0){
        $nombre = $usuarios[$usuario]["nombre"];
        $apellidos = $usuarios[$usuario]["apellidos"];

        require "ejercicio3.LogView.php";

    } else{
        $mensaje_error = $mensajesDeError[$respuesta];
        require "ejercicio3.view.php";
    }

}else{
    require "ejercicio3.view.php";
}

if(isset($_GET["accion"])){
    
}

function usuarioExiste(string $usuario, string $contrasena, array $usuarios): int{
    if(array_key_exists($usuario, $usuarios)){

        if($usuarios[$usuario]["contrasena"] === $contrasena){
            return 0;
        } else{
            return 1;
        }
    } else{
        return 2;
    }
}


?>