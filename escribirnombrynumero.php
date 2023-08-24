<?php 
function mostrar(){
    if($nombre = $_POST ['Nombre'] && $Numero = $_POST ['Entero']){
        $nombre = $_POST ['Nombre'];
        $Numero = $_POST ['Entero'];
        for($i = 1; $i <= $Numero; $i +=1){
            echo ($i . " " . $nombre . "<br>");
        }
    }
}

mostrar()



?>