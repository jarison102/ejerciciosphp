<?php 

function palabra(){
    if($palabras = $_POST['Nombre']){
        $palabras = $_POST['Nombre'];
        for($i=0; $i <= 10; $i++){
            echo ($palabras."<br>");
        }
    }
}
palabra()




?>