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
?>