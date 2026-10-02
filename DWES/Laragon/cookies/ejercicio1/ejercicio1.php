<?php

// 1
if(isset($_POST["texto"])){

    $texto = $_POST["texto"];

    setcookie("usuario", $texto);


}

// 2
if(isset($_POST["eliminarCookie"])){
        
    setcookie("usuario", $texto, -1);

}


require "ejercicio1.view.php";
?>