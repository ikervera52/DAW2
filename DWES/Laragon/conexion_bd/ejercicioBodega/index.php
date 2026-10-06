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

function redirect($url){
    header("Location:" . $url);
    die();
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
            $vinos = getVinoByBodegaId($db, ["bodegaID" => $id]);
            require "views/infoBodega.view.php";
            die();
        break;
        case "guardarBodega":
            $id = $_GET["id"];
            $datos = array_merge(recogerGet(), ["id" => $id]);
            $bodegaSeleccionada = getById($db, ["id" => $id]);
            updateById($db, $datos);
            redirect("index.php?accion=entrar&id=" . $id);
        break;
        case "eliminarBodega":
            $id = $_GET["id"];
            deleteBodegaById($db, ["id" => $id]);
        break;
        case "entrarAnadirVino":
            require "views/formularioVino.view.php";
            die();


        break;
    }
}

$bodegas = getAll($db);

require "views/index.view.php";

?>