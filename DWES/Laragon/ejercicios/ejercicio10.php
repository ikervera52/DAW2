<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<?php 

    function concatText($text1, $text2 = "Manu") : string
    {
        return $text1 . " " .  $text2;
    }

    echo(concatText("Hola"));


?>
    
</body>
</html>