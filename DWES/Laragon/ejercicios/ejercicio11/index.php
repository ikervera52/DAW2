
<?php 

    require "index.view.php";

    function concatText($text1, $text2 = "Pepe") : string
    {
        return $text1 . " " .  $text2;
    }

?>
