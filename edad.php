<?php 


function edad(){
 if($edad = $_POST ['Edad']){
    $edad = $_POST ['Edad'];
    if($edad <= 1){
        echo "Necesitas mas edad";
    }
    if($edad >= 2){
        for($i = $edad; $i <= 10; $i++){
            echo ($i  . "Tus años en recorrido son " . "<br>");
        }
    }
 }
}
edad()

?>