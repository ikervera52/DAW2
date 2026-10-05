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

?>