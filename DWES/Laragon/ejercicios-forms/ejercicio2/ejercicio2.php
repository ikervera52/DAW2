<?php 



function operar(int|label $num1, int|label $num2, string $operacion) : int|label{
    
    switch(true){
        case $operacion == "suma":
            return $num1 + $num2;
            break;
        case $operacion == "resta":
            return $num1 - $num2;
            break;
        case $operacion == "multiplicacion":
            return $num1 * $num2;
            break;
        case $operacion == "division":
            if($num2 == 0){
                return null;
            } else return $num1 / $num2;
            break;
    }

}

$enviado;
$resultado;

if(isset($_POST["numero1"])){


    $enviado = true;
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $operacion = $_POST["operacion"];
    $resultado = operar($numero1, $numero2, $operacion);

} else{
    $enviado = false;
}

require "ejercicio2.view.php";

?>