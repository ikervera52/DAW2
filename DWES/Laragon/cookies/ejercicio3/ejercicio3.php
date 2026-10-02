<?php 

$idiomaSeleccionado = $_COOKIE["idioma"] ?? '';


function elegirIdioma($idioma){
    switch($idioma){
        case 1:
            return 'Euskera';
            break;
        case 2:
            return 'Castellano';
            break;
    }
}

if(isset($_POST["guardar"])){
    
    $idiomaSeleccionado = elegirIdioma($_POST["idioma"]);
    setcookie("idioma", $idiomaSeleccionado, time() + 60);

}



require "ejercicio3.view.php";

?>