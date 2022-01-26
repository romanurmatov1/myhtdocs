<?php 
function reverse($text){
    return strrev($text);
}
if (isset($_POST["reverse"])) {
    $text = $_POST["reverse"];
    echo reverse($text);   
}

?>