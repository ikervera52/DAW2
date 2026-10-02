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


function insertAlumnos($db, $data){

    $query = $db->prepare("INSERT INTO alumnos (nombre, apellidos, email, edad)
                        VALUES (:nombre, :apellidos, :email, :edad)");

    $query->execute($data);

}

function selectAlumnos($db){
    $query = $db->prepare("SELECT * FROM alumnos");

    $query->execute();

    $resultado = $query->fetchAll();

    foreach($resultado as $dato){
    
        echo $dato["nombre"];
        echo $dato["apellidos"];
        echo $dato["email"];
        echo $dato["edad"];
    }
}


$db = connect($host, $dbname, $user, $pass);

$data = [
    "nombre" => "aaa",
    "apellidos" => "bbbb",
    "email" =>  "ccccc",
    "edad" => 1,
];

insertAlumnos($db, $data);
selectAlumnos($db);

?>