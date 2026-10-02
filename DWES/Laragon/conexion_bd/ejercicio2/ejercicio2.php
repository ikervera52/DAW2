<?php

$host = "localhost";
$dbname = "ejercicios_php";
$user = "root";
$pass = "";

function connect ($host, $dbname, $user, $pass){
    try{
        $dbh = new PDO(
            "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
            $user, $pass
        );

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $dbh;
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}

function insertProducto($db ,$producto){
    $data = [
        "nombre" => $producto
    ];

    $query = $db->prepare("INSERT INTO productos (nombre)
                            VALUES (:nombre)");
    
    $query->execute($data);
}

function selectPorductos($db){
    $query = $db->prepare("SELECT * FROM productos");

    $query->execute();

    return $query->fetchAll();
}

function deleteProducto($db, $idProducto){
    $data = [
        "id" => $idProducto
    ];

    $query = $db->prepare("DELETE FROM productos WHERE id = :id");

    $query->execute($data);
}

function deleteProductos($db){

    $query = $db->prepare("DELETE FROM productos");

    $query->execute();
}

$db = connect($host, $dbname, $user, $pass);

// INSERTAR PRODUCTOS
if(isset($_POST["producto"])){
    $producto = $_POST["producto"];
    insertProducto($db, $producto);
}

//ELIMINAR PRODUCTO POR ID
if(isset($_GET["delProducto"])){
    if($_GET["delProducto"] == -1){
        deleteProductos($db);
    } else{
        deleteProducto($db, $_GET["delProducto"]);
    }
}

$listaCompra = selectPorductos($db);

require "ejercicio2.view.php";


?>