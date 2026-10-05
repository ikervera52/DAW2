<?php 

require_once "conexion_db.php";
require_once "db_functions.php";

$db = connect($host, $dbname, $user, $pass);

function recogerGet(){
    return [
        "nombre" => $_GET["nombre"],
        "direccion" => $_GET["direccion"],
        "email" => $_GET["email"],
        "telefono" => $_GET["telefono"],
        "personaContacto" => $_GET["personaContacto"],
        "anoFundacion" => $_GET["anoFundacion"],
        "restaurante" => $_GET["restaurante"],
        "hotel" => $_GET["hotel"]
    ];
}

if(isset($_GET["accion"])){
    switch($_GET["accion"]){
        case "anadirView":

            require "views/formularioBodega.view.php";
            die();

        break;
        case "anadirBodega":
            insertBodega($db, recogerGet());
        break;
        case "entrar":
            $id = $_GET["id"];
            $bodegaSeleccionada = getById($db, ["id" => $id]);
            $restaurante;
            $hotel;
            if($bodegaSeleccionada->restaurante == 1){
                $restaurante = "checked";
            }

            if($bodegaSeleccionada->hotel == 1){
                $hotel = "checked";
            }
            require "views/infoBodega.view.php";
            die();
        break;
        case "guardarBodega":
            $id = $_GET["id"];
            updateById($db, recogerGet());
            require "index.php?accion=entrar&id=" . $id;
            die();
        break;
    }
}

$bodegas = getAll($db);

require "views/index.view.php";

?>