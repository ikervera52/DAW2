<?php 

function getAll($db){
    $query = $db->prepare("SELECT * FROM bodegas");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_OBJ);
}

function insertBodega($db, $data){
    $query = $db->prepare("INSERT INTO bodegas (nombre,direccion,email,telefono,personaContacto,anoFundacion,restaurante,hotel) VALUES (:nombre,:direccion,:email,:telefono,:personaContacto,:anoFundacion,:restaurante,:hotel)");

    $query->execute($data);
}

function getById($db, $data){
    $query = $db->prepare("SELECT * FROM bodegas WHERE id = :id");
    $query->execute($data);
    return $query->fetchAll(PDO::FETCH_OBJ)[0];
}

function updateById($db, $data){
    $query = $db->prepare("UPDATE bodegas SET nombre = :nombre, direccion = :direccion, email = :email, telefono = :telefono, personaContacto = :personaContacto, anoFundacion = :anoFundacion, restaurante = :restaurante, hotel = :hotel WHERE id = :id");
    $query->execute($data);
}

function deleteBodegaById($db,$data){
    $query = $db->prepare("DELETE FROM bodegas WHERE id = :id");
    $query->execute($data);
}

// FUNCIONES DE VINOS EN BASE DE DATOS

function getVinoByBodegaId($db, $data){
    $query = $db->prepare("SELECT * FROM vinos WHERE bodegaID = :bodegaID");
    $query->execute($data);

    return $query->fetchAll(PDO::FETCH_OBJ);

} 
?>