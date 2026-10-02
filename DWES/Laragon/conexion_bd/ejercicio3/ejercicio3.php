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

$db = connect($host, $dbname, $user, $pass);


function selectEmpleados($db){
    $query = $db->prepare("SELECT * FROM empleados");
    $query->execute();

    return $query->fetchAll(PDO::FETCH_OBJ);
}

function insertEmpleado($db, $data){
    $query = $db->prepare("INSERT INTO empleados (nombre,apellidos,edad,fechaNacimiento,email,dni,sexo,curriculum)
                            VALUES (:nombre, :apellidos, :edad, :fechaNacimiento, :email, :dni, :sexo, :curriculum)");
    
    $query->execute($data);
}

function deleteUsuario($db, $data){
    $query = $db->prepare("DELETE FROM empleados WHERE id = :id");

    $query->execute($data);
}

function deleteAll($db){
    $query = $db->prepare("DELETE FROM empleados");

    $query->execute();
}

function selectById($db, $data){
    $query = $db->prepare("SELECT * FROM empleados WHERE id = :id");
    $query->execute($data);
    return $query->fetchAll(PDO::FETCH_OBJ);
}

function selectEmpleadosByName($db, $data){

    $query = $db->prepare("SELECT * FROM empleados WHERE nombre IS NULL OR nombre = :nombre");

    $query->execute($data);
    return $query->fetchAll(PDO::FETCH_OBJ);

}

$empleados = selectEmpleados($db);


if(isset($_GET["accion"])){
    switch($_GET["accion"]){
        case "insertar":
                $datos = [
                    "nombre" => $_GET["nombre"],
                    "apellidos" => $_GET["apellidos"],
                    "edad" => $_GET["edad"],
                    "fechaNacimiento" => $_GET["fechaNacimiento"],
                    "email" => $_GET["email"],
                    "dni" => $_GET["dni"],
                    "sexo" => $_GET["sexo"],
                    "curriculum" => $_GET["curriculum"]
                ];
                insertEmpleado($db, $datos);
                $empleados = selectEmpleados($db);


            break;

        case "eliminar":
                $datos = [
                    "id" => $_GET["id"]
                ];
        
                deleteUsuario($db, $datos);
                $empleados = selectEmpleados($db);

            break;

        case "eliminartodo":

                deleteAll($db);
                $empleados = selectEmpleados($db);

            break;
        case "verdetalles":

                $empleadoElegido = selectById($db, ["id" => $_GET["id"]])[0];

                require "views/ejercicio3.fichaempleado.php";
                die();

            break;
        case "Filtrar":
                if($_GET["buscarPorNombre"] == ""){
                    $empleados = selectEmpleados($db);
                }else{
                $empleados = selectEmpleadosByName($db, ["nombre" => $_GET["buscarPorNombre"]]);
                }
            break;
    }

}

require "views/ejercicio3.view.php";


?>