<?php 

    $enviado = false;
    $usuarioComrpobado;

    $usuarios = [
        "user1" => [
            "nombre" => "Ane",
            "apellidos" => "Lopez",
            "password" => "1234"
        ],
        "user2" => [
            "nombre" => "Ane",
            "apellidos" => "Lopez",
            "password" => "12345"
        ],
        "user3" => [
            "nombre" => "Ane",
            "apellidos" => "Lopez",
            "password" => "123456"
        ]
        ];

    function validarLogin($listaUsuarios ,$usuario, $contraseña){

        if(array_key_exists($usuario, $listaUsuarios)){
            if($listaUsuarios[$usuario]["password"] == $contraseña){

                return 0;
            } else{
                return 1;

            }
        }else{
            return 2;
        }
    }

    if(isset($_POST["usuario"])){

        $usuario = $_POST["usuario"];
        $contraseña = $_POST["contraseña"];

        $enviado = true;

        $usuarioComrpobado = validarLogin($usuarios ,$usuario, $contraseña);

    }
    
    require "ejercicio4.view.php"

?>